<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListDeliveryRelatedNum
{
    public const CAMPAIGN_DPA_DEFAULT_NOT_CampaignGetV2DataListDeliveryRelatedNum = 'CAMPAIGN_DPA_DEFAULT_NOT';
    public const CAMPAIGN_DPA_SINGLE_DELIVERY_CampaignGetV2DataListDeliveryRelatedNum = 'CAMPAIGN_DPA_SINGLE_DELIVERY';
    public const CAMPAIGN_DPA_MULTI_DELIVERY_CampaignGetV2DataListDeliveryRelatedNum = 'CAMPAIGN_DPA_MULTI_DELIVERY';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_DPA_DEFAULT_NOT_CampaignGetV2DataListDeliveryRelatedNum,
        self::CAMPAIGN_DPA_SINGLE_DELIVERY_CampaignGetV2DataListDeliveryRelatedNum,
        self::CAMPAIGN_DPA_MULTI_DELIVERY_CampaignGetV2DataListDeliveryRelatedNum,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListDeliveryRelatedNum', $value));
        }
        return (string) $value;
    }
}
