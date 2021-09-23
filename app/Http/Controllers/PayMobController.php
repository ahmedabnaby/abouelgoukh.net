<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategories;
use App\Models\Orders;
use Session;

class PayMobController extends Controller
{
        /**
     * Send POST cURL request to paymob servers.
     *
     * @param  string  $url
     * @param  array  $json
     * @return array
     */
    protected function cURL($url, $json)
    {
        // Create curl resource
        $ch = curl_init($url);

        // Request headers
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        // Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // $output contains the output string
        $output = curl_exec($ch);

        // Close curl resource to free up system resources
        curl_close($ch);
        return json_decode($output);
    }

    /**
     * Send GET cURL request to paymob servers.
     *
     * @param  string  $url
     * @return array
     */
    protected function GETcURL($url)
    {
        // Create curl resource
        $ch = curl_init($url);

        // Request headers
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        // Return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // $output contains the output string
        $output = curl_exec($ch);

        // Close curl resource to free up system resources
        curl_close($ch);
        return json_decode($output);
    }

        /**
     * Request auth token from paymob servers.
     *
     * @return array
     */
    public function authPaymob($api_key)
    {
        // Request body
        $json = [
            'api_key' => $api_key,
        ];

        // Send curl
        $auth = $this->cURL(
            'https://accept.paymobsolutions.com/api/auth/tokens',
            $json
        );

        return $auth;
    }


        /**
     * Register order to paymob servers
     *
     * @param  string  $token
     * @param  int  $merchant_id
     * @param  int  $amount_cents
     * @param  int  $merchant_order_id
     * @return array
     */
    public function makeOrderPaymob($token, $amount_cents, $delivery_needed,$items )
    {
        // Request body
        $json = [
            'auth_token'           => $token,
            'delivery_needed'        => $delivery_needed,
            'amount_cents'           => $amount_cents,
            'currency'               => 'EGP',
            'items'                  =>$items
        ];

        // Send curl
        $order = $this->cURL(
            'https://accept.paymobsolutions.com/api/ecommerce/orders',
            $json
        );

        return $order;
    }

        /**
     * Get payment key to load iframe on paymob servers
     *
     * @param  string  $token
     * @param  int  $amount_cents
     * @param  int  $order_id
     * @param  string  $email
     * @param  string  $fname
     * @param  string  $lname
     * @param  int  $phone
     * @param  string  $city
     * @param  string  $country
     * @return array
     */
    public function getPaymentKeyPaymob(
        $integration_id,
        $token,
        $amount_cents,
        $order_id,
        $email   = 'null',
        $fname   = 'null',
        $lname   = 'null',
        $phone   = 'null',
        $city    = 'null',
        $country = 'null'
    ) {
      // Request body
      $json = [
          'auth_token'   => $token,
          'amount_cents' => $amount_cents,
          'expiration'   => 36000,
          'order_id'     => $order_id,
          "billing_data" => [
              "email"        => $email,
              "first_name"   => $fname,
              "last_name"    => $lname,
              "phone_number" => $phone,
              "city"         => $city,
              "country"      => $country,
              'street'       => 'null',
              'building'     => 'null',
              'floor'        => 'null',
              'apartment'    => 'null'
          ],
          'currency'            => 'EGP',
          'card_integration_id' => $integration_id
      ];

      // Send curl
      $payment_key = $this->cURL(
          'https://accept.paymobsolutions.com/api/acceptance/payment_keys',
          $json
      );

      return $payment_key;
  }
}
