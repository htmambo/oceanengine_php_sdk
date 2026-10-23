<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2DeliveryRelatedNum
{
    public const CAMPAIGN_DPA_DEFAULT_NOT_CampaignCreateV2DeliveryRelatedNum = 'CAMPAIGN_DPA_DEFAULT_NOT';
    public const CAMPAIGN_DPA_SINGLE_DELIVERY_CampaignCreateV2DeliveryRelatedNum = 'CAMPAIGN_DPA_SINGLE_DELIVERY';
    public const CAMPAIGN_DPA_MULTI_DELIVERY_CampaignCreateV2DeliveryRelatedNum = 'CAMPAIGN_DPA_MULTI_DELIVERY';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_DPA_DEFAULT_NOT_CampaignCreateV2DeliveryRelatedNum,
        self::CAMPAIGN_DPA_SINGLE_DELIVERY_CampaignCreateV2DeliveryRelatedNum,
        self::CAMPAIGN_DPA_MULTI_DELIVERY_CampaignCreateV2DeliveryRelatedNum,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2DeliveryRelatedNum', $value));
        }
        return (string) $value;
    }
}
