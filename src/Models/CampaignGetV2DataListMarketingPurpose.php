<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListMarketingPurpose
{
    public const UNLIMITED_CampaignGetV2DataListMarketingPurpose = 'UNLIMITED';
    public const CONVERSION_CampaignGetV2DataListMarketingPurpose = 'CONVERSION';
    public const ACKNOWLEDGE_CampaignGetV2DataListMarketingPurpose = 'ACKNOWLEDGE';
    public const INTENTION_CampaignGetV2DataListMarketingPurpose = 'INTENTION';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_CampaignGetV2DataListMarketingPurpose,
        self::CONVERSION_CampaignGetV2DataListMarketingPurpose,
        self::ACKNOWLEDGE_CampaignGetV2DataListMarketingPurpose,
        self::INTENTION_CampaignGetV2DataListMarketingPurpose,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListMarketingPurpose', $value));
        }
        return (string) $value;
    }
}
