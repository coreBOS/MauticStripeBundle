<?php

/*
 * @copyright   2021 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'name' => 'Stripe',
    'description' => 'Enables integrations with Stripe for Payment transactions',
    'version' => '1.0',
    'author' => 'george1806',
    'routes' => [
        'main' => [],
        'public' => [],
        'api' => [],
    ],
    'services' => [
        'forms' => [],
        'helpers' => [],
        'other' => [
            'mautic.stripe_payment.services' => [
                'class' => \MauticPlugin\MauticStripeBundle\Services\StripeConn::class,
                'arguments' => [
                    'mautic.helper.integration',
                ],
            ],
        ],
        'integrations' => [
            'mautic.integration.stripe' => [
                'class' => \MauticPlugin\MauticStripeBundle\Integration\StripeIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'logger',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
    ],
];
