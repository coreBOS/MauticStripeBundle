<?php

/*
 * @copyright   2021 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticStripeBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

class StripeIntegration extends AbstractIntegration
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Stripe';
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayName()
    {
        return 'Stripe Payment';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredKeyFields()
    {
        return [
            'secret_key' => 'mautic.integration.stripe.secret',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthenticationType()
    {
        return 'api';
    }
}
