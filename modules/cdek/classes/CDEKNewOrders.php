<?php
/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    SeoSA    <885588@bk.ru>
 * @copyright 2012-2017 SeoSA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * Class CDEKNewOrders
 * @see List orders on delivery
 */
class CDEKNewOrders extends CDEKDocument
{
    /**
     * @var Order
     */
    protected $order;
    /**
     * @var bool
     */
    protected $prepayment = false;
    /**
     * @var bool
     */
    protected $free_shipping;

    public function __construct(Order $order, $prepayment = false, $free_shipping = false)
    {
        $this->order = $order;
        $this->api_path = self::API_URL.'new_orders.php';
        $this->root_name = 'DeliveryRequest';
        $this->root_attrs = array(
            'Number' => $order->id,
            'Date' => CDEKConf::getDate(date('Y-m-d', strtotime($order->date_add))),
            'Account' => CDEKConf::getAccount(),
            'Secure' => CDEKConf::getSecure(date('Y-m-d', strtotime($order->date_add))),
            'OrderCount' => '1',
            'DeveloperKey' => '3236294af6a53c6eec685f5b0b8d598e'
        );
        $this->prepayment = $prepayment;
        $this->free_shipping = $free_shipping;
    }

    public function getXMLRequest()
    {
        $address = new Address($this->order->id_address_delivery);
        $currency = new Currency($this->order->id_currency);
        $tariff = CarrierTariff::getTariffByCarrier($this->order->id_carrier);

        $items = array();
        $weight = 0;
        $cart = new Cart($this->order->id_cart);
        $order_info = CDEKOrderInfo::getInstanceByCart($this->order->id_cart);
        foreach ($cart->getProducts() as $index => &$product)
        {
            $price = self::getPriceStatic($product['id_product'], true, $product['id_product_attribute']);

            if ($product['height'] == 0) {
                $product['height'] = CDEKCalculate::getProductDimensions($product, 'height');
            }
            if ($product['width'] == 0) {
                $product['width'] = CDEKCalculate::getProductDimensions($product, 'width');
            }
            if ($product['depth'] == 0) {
                $product['depth'] = CDEKCalculate::getProductDimensions($product, 'length');
            }
            if ($product['weight'] == 0) {
                $product['weight'] = CDEKCalculate::getProductDimensions(
                    $product,
                    'weight'
                ) * (float)ConfSK::getConf('weight_unit');
            } else {
                $product['weight'] = $product['weight'] * (float)ConfSK::getConf('weight_unit');
            }

            if (!$product['reference']) {
                $product['reference'] = 'unknown';
            }

            $product['reference'] .= '__'.($index + 1);
            $item = array(
                'WareKey' => $product['reference'],
                'Cost' => $price,
                'Payment' => ($this->prepayment ? 0 : $price),
//                'Weight' => max(
//                    ($product['height'] * $product['width'] * $product['depth']) / 5000,
//                    $product['weight']
//                ),
                'Weight' => $product['weight'] * 1000,
                'Amount' => (int)$product['cart_quantity'],
                'Comment' => str_replace("'","`",$product['name']) .' '.$product['attributes']
            );

            if (Configuration::get('PS_TAX'))
            {
                $tax_manager = TaxManagerFactory::getManager(
                    $address,
                    Product::getIdTaxRulesGroupByIdProduct((int)$product['id_product'])
                );
                $product_tax_calculator = $tax_manager->getTaxCalculator();

                $item['PaymentVATRate'] = 'VAT'.(int)$product_tax_calculator->getTotalRate();
                $item['PaymentVATSum'] = Tools::ps_round(
                    $price - ($price / (100 + (int)$product_tax_calculator->getTotalRate()) * 100),
                    2
                );
            }

            $items[] = array(
                '@attributes' => $item
            );

            $weight += ($product['weight'] * $product['cart_quantity']);
        }

        $address_attrs = array();
        if (in_array($tariff['mode'], array(CDEKConf::MODE_STOCK_STOCK, CDEKConf::MODE_DOOR_STOCK))) {
            $address_attrs['PvzCode'] = $order_info->pvz_key;
        } elseif (in_array($tariff['mode'], array(CDEKConf::MODE_DOOR_DOOR, CDEKConf::MODE_STOCK_DOOR))) {
            //$address_attrs['Street'] = ($order_info->street
            //    ? $order_info->street
            //    : $address->address1.' '.$address->address2
            //);
            $address_attrs['Street'] = $address->address1.' '.$address->address2;
            //$address_attrs['House'] = $order_info->house;
            $address_attrs['House'] = '-';
            //$address_attrs['Flat'] = $order_info->flat;
            $address_attrs['Flat'] = '-';
        }

        $shippings = $this->order->getShipping();
        $shipping = 0;
        if (is_array($shippings) && count($shippings)) {
            $shipping = $shippings[count($shippings) - 1]['shipping_cost_tax_incl'];
        }

        if ($this->free_shipping) {
            $shipping = 0;
        }

        $customer = new Customer($address->id_customer);
        $firstname = $address->firstname;
        if (!$firstname) {
            $firstname = $customer->firstname;
        }
        if (!$firstname) {
            $firstname = '--';
        }

        $lastname = $address->lastname;
        if (!$lastname) {
            $lastname = $customer->lastname;
        }
        if (!$lastname) {
            $lastname = '--';
        }

        $recipient_name = implode(' ', array(
            $firstname,
            $lastname
        ));

        $length_recipient_name = Tools::strlen($recipient_name);
        if ($length_recipient_name < 4) {
            $recipient_name = sprintf('%\' 4s', $recipient_name);
        }

        $default_phone = '+79000000001';
        $phone = ($address->phone_mobile ?
            $address->phone_mobile : ($address->phone ? $address->phone : $default_phone));
        if (!preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', $phone)) {
            $phone = $default_phone;
        }

        $order = array(
            '@attributes' => array(
                'Number' => $this->order->id,
//                'Address' => $address->address1.' '.$address->address2,
                'DeliveryRecipientCost' => $shipping,
                'SendCityPostCode' => CDEKConf::getPostcode(),
                'RecCityPostCode' => $address->postcode,
                'RecipientName' => $recipient_name,
              //  'SellerName' => CDEKConf::getName(),
              //  'clientside' =>CDEKConf::getclientside(),
                'Phone' => $phone,
                'Comment' => '',
                'TariffTypeCode' => $tariff['id_tariff'],
                'RecientCurrency' => $currency->iso_code,
                'ItemsCurrency' => $currency->iso_code
            ),
            'Seller' => array(
                '@attributes' => array(
                'name' => CDEKConf::getCompany(),
             //   'name' => CDEKConf::getName(),
                'address' => CDEKConf::getAddress(),
                'street' => CDEKConf::getStreet(),
                'house' => CDEKConf::getHouse(),
                'flat' => CDEKConf::getFlat(),
                'phone' => CDEKConf::getPhone()
                ),
            ),
            'Package' => array(
                '@attributes' => array(
                    'Number' => 1,
                    'BarCode' => 101,
                    'Weight' => $weight * 1000
                ),
                'Item' => (count($items) == 1 ? $items[0] : $items)
            ),
            'AddService' => array(
                '@attributes' => array(
                'ServiceCode' => CDEKConf::getAddService()
                ),
            ),
        );

        if (in_array($tariff['mode'], array(CDEKConf::MODE_STOCK_STOCK, CDEKConf::MODE_DOOR_STOCK))) {
            $order['@attributes']['PvzCode'] = $order_info->pvz_key;
        }

        $sender = array(
            '@attributes' => array(
                'company' => CDEKConf::getCompany(),
                'name' => CDEKConf::getName(),
            ),
            'Address' => array(
                '@attributes' => array(
                    'flat' => CDEKConf::getFlat(),
                    'house' => CDEKConf::getHouse(),
                    'street' => CDEKConf::getStreet(),
                ),
            ),
            'Phone' => CDEKConf::getPhone(),
        );

        $order['Address'] = array(
            '@attributes' => $address_attrs
        );
        $order['Sender'] = $sender;

if(CDEKConf::getAddService() == false) {
    unset($order['AddService']);
}

        $order_info->weight = (float)$weight;
        $order_info->save();
//        if ($order_info->delivery_date && $order_info->delivery_date != '0000-00-00 00:00:00') {
//            $order['Schedule'] = array(
//                'Attempt' => array(
//                    '@attributes' => array(
//                        'ID' => 1,
//                        'Date' => str_replace(' 00:00:00', '', $order_info->delivery_date),
//                        'TimeBeg' => $order_info->delivery_time_begin.':00',
//                        'TimeEnd' => $order_info->delivery_time_end.':00'
//                    )
//                )
//            );
//        }

        if (Configuration::get('PS_TAX'))
        {
            $order['@attributes']['DeliveryRecipientVATRate'] = ConfSK::getConf('DeliveryRecipientVATRate');

            $tax = 0;
            switch (ConfSK::getConf('DeliveryRecipientVATRate'))
            {
                case 'VAT10':
                    $tax = 10;
                    break;
                case 'VAT20':
                    $tax = 20;
                    break;
            }

            $order['@attributes']['DeliveryRecipientVATSum'] = Tools::ps_round(
                $shipping - ($shipping / (100 + $tax) * 100),
                2
            );
        }
        $door = array(138,139,293,295,245,247,1,3,12,17,18,57,58,59,60,61);
        $today = date("Y-m-d");
        $date = date('Y-m-d', strtotime($today . '+ 1 days'));
        if(in_array((int)$tariff['id_tariff'], $door)) {
            $callcourier = array(
                'call' => array(
                    '@attributes' => array(
                        'date' => $date,
                        'SendCityPostCode' => CDEKConf::getPostcode(),
                        'SenderName' => CDEKConf::getName(),
                        'SendPhone' => CDEKConf::getPhone(),
                        'TimeBeg' => CDEKConf::getStart_time(),
                        'TimeEnd' => CDEKConf::getEnd_time(),
                    ),
                    'SendAddress' => array(
                        '@attributes' => array(
                            'Street' => CDEKConf::getStreet(),
                            'House' => CDEKConf::getHouse(),
                            'Flat' => CDEKConf::getFlat()
                        ),
                    ),
                ),
            );
        } else{
            return array (
                'Order' => $order
            );
        }
        return array (
            'callcourier' => $callcourier,
            'Order' => $order
        );
    }

    public static function getPriceStatic($id_product, $usetax = true, $id_product_attribute = null, $decimals = 6, $divisor = null,
                                          $only_reduc = false, $usereduc = true, $quantity = 1, $force_associated_tax = false, $id_customer = null, $id_cart = null,
                                          $id_address = null, &$specific_price_output = null, $with_ecotax = true, $use_group_reduction = true, Context $context = null,
                                          $use_customer_price = true)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        $cur_cart = $context->cart;

        if ($divisor !== null) {
            Tools::displayParameterAsDeprecated('divisor');
        }

        if (!Validate::isBool($usetax) || !Validate::isUnsignedId($id_product)) {
            die(Tools::displayError());
        }

        // Initializations
        $id_group = null;
        if ($id_customer) {
            $id_group = Customer::getDefaultGroupId((int)$id_customer);
        }
        if (!$id_group) {
            $id_group = (int)Group::getCurrent()->id;
        }

        // If there is cart in context or if the specified id_cart is different from the context cart id
        if (!is_object($cur_cart) || (Validate::isUnsignedInt($id_cart) && $id_cart && $cur_cart->id != $id_cart)) {
            /*
            * When a user (e.g., guest, customer, Google...) is on PrestaShop, he has already its cart as the global (see /init.php)
            * When a non-user calls directly this method (e.g., payment module...) is on PrestaShop, he does not have already it BUT knows the cart ID
            * When called from the back office, cart ID can be inexistant
            */
            if (!$id_cart && !isset($context->employee)) {
                die(Tools::displayError());
            }
            $cur_cart = new Cart($id_cart);
            // Store cart in context to avoid multiple instantiations in BO
            if (!Validate::isLoadedObject($context->cart)) {
                $context->cart = $cur_cart;
            }
        }

        $cart_quantity = 0;
        if ((int)$id_cart) {
            $cache_id = 'Product::getPriceStatic_' . (int)$id_product . '-' . (int)$id_cart;
            if (!Cache::isStored($cache_id) || ($cart_quantity = Cache::retrieve($cache_id) != (int)$quantity)) {
                $sql = 'SELECT SUM(`quantity`)
				FROM `' . _DB_PREFIX_ . 'cart_product`
				WHERE `id_product` = ' . (int)$id_product . '
				AND `id_cart` = ' . (int)$id_cart;
                $cart_quantity = (int)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
                Cache::store($cache_id, $cart_quantity);
            } else {
                $cart_quantity = Cache::retrieve($cache_id);
            }
        }

        //  $id_currency = Validate::isLoadedObject($context->currency) ? (int)$context->currency->id : (int)Configuration::get('PS_CURRENCY_DEFAULT');

        $sql = 'SELECT `id_currency` FROM `' . _DB_PREFIX_ . 'currency` WHERE `iso_code` = "RUB"';

        if ($results = Db::getInstance()->getValue($sql)) {
            $id_currency = $results;
        } else {
            $id_currency = Validate::isLoadedObject($context->currency) ? (int)$context->currency->id : (int)Configuration::get('PS_CURRENCY_DEFAULT');
        }
        // retrieve address informations
        $id_country = (int)$context->country->id;
        $id_state = 0;
        $zipcode = 0;

        if (!$id_address && Validate::isLoadedObject($cur_cart)) {
            $id_address = $cur_cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')};
        }

        if ($id_address) {
            $address_infos = Address::getCountryAndState($id_address);
            if ($address_infos['id_country']) {
                $id_country = (int)$address_infos['id_country'];
                $id_state = (int)$address_infos['id_state'];
                $zipcode = $address_infos['postcode'];
            }
        } elseif (isset($context->customer->geoloc_id_country)) {
            $id_country = (int)$context->customer->geoloc_id_country;
            $id_state = (int)$context->customer->id_state;
            $zipcode = $context->customer->postcode;
        }

        if (Tax::excludeTaxeOption()) {
            $usetax = false;
        }

        if ($usetax != false
            && !empty($address_infos['vat_number'])
            && $address_infos['id_country'] != Configuration::get('VATNUMBER_COUNTRY')
            && Configuration::get('VATNUMBER_MANAGEMENT')) {
            $usetax = false;
        }

        if (is_null($id_customer) && Validate::isLoadedObject($context->customer)) {
            $id_customer = $context->customer->id;
        }

        $return = Product::priceCalculation(
            $context->shop->id,
            $id_product,
            $id_product_attribute,
            $id_country,
            $id_state,
            $zipcode,
            $id_currency,
            $id_group,
            $quantity,
            $usetax,
            $decimals,
            $only_reduc,
            $usereduc,
            $with_ecotax,
            $specific_price_output,
            $use_group_reduction,
            $id_customer,
            $use_customer_price,
            $id_cart,
            $cart_quantity
        );

        return $return;
    }

}