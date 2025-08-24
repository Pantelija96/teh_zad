<?php

namespace App\Enums;

enum CRCEaccountReferenceId: string
{
    case BUNDLE_SUBSCRIBER_MAPPING_ID = 'bundle_subscriber_mapping_id';
    case TARIFF_ID = 'tariff_id';
    case CAMPAIGN_ID = 'campaign_id';

    public function description(): string
    {
        return match($this) {
            self::BUNDLE_SUBSCRIBER_MAPPING_ID => 'Bundle Subscriber Mapping',
            self::TARIFF_ID => 'Tariff',
            self::CAMPAIGN_ID => 'Campaign',
        };
    }
}
