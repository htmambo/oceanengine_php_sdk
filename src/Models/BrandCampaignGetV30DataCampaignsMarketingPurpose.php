<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignGetV30DataCampaignsMarketingPurpose
{
    public const Enum_0_BrandCampaignGetV30DataCampaignsMarketingPurpose = 0;
    public const Enum_1_BrandCampaignGetV30DataCampaignsMarketingPurpose = 1;
    public const Enum_2_BrandCampaignGetV30DataCampaignsMarketingPurpose = 2;
    public const Enum_3_BrandCampaignGetV30DataCampaignsMarketingPurpose = 3;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandCampaignGetV30DataCampaignsMarketingPurpose,
        self::Enum_1_BrandCampaignGetV30DataCampaignsMarketingPurpose,
        self::Enum_2_BrandCampaignGetV30DataCampaignsMarketingPurpose,
        self::Enum_3_BrandCampaignGetV30DataCampaignsMarketingPurpose,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignGetV30DataCampaignsMarketingPurpose', $value));
        }
        return (string) $value;
    }
}
