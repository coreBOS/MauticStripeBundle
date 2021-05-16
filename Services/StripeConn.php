<?php
/*
 * @copyright   2021 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

/**This file will define All functionalities to call stripe functionalities*/

namespace MauticPlugin\MauticStripeBundle\Services;

use Mautic\PluginBundle\Helper\IntegrationHelper;
use Stripe\StripeClient;

class StripeConn
{
    public $stripe_client = false;

    public function __construct(IntegrationHelper $integrationHelper)
    {
        $integrationObject = $integrationHelper->getIntegrationObject('Stripe');
        $keys = $integrationObject->getDecryptedApiKeys();
        $stripeKey = $keys['secret_key'];
        $this->stripe_client = new StripeClient($stripeKey);
    }

    /**
     * Example for stripe function
     *  function stripeCreateCustomer to create stripe customer.
     *
     * @param $customer -- array of stripe customer details
     */
    public function stripeCreateCustomer($customer)
    {
        $customerRes = $this->stripe_client->customers->create($customer);

        return $customerRes;
    }
}
