<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignGetV30DataCampaignsCampaignStatus
{
    public const Enum_1_BrandCampaignGetV30DataCampaignsCampaignStatus = 1;
    public const Enum_10_BrandCampaignGetV30DataCampaignsCampaignStatus = 10;
    public const Enum_11_BrandCampaignGetV30DataCampaignsCampaignStatus = 11;
    public const Enum_2_BrandCampaignGetV30DataCampaignsCampaignStatus = 2;
    public const Enum_3_BrandCampaignGetV30DataCampaignsCampaignStatus = 3;
    public const Enum_4_BrandCampaignGetV30DataCampaignsCampaignStatus = 4;
    public const Enum_5_BrandCampaignGetV30DataCampaignsCampaignStatus = 5;
    public const Enum_6_BrandCampaignGetV30DataCampaignsCampaignStatus = 6;
    public const Enum_7_BrandCampaignGetV30DataCampaignsCampaignStatus = 7;
    public const Enum_8_BrandCampaignGetV30DataCampaignsCampaignStatus = 8;
    public const Enum_9_BrandCampaignGetV30DataCampaignsCampaignStatus = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_10_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_11_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_2_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_3_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_4_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_5_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_6_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_7_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_8_BrandCampaignGetV30DataCampaignsCampaignStatus,
        self::Enum_9_BrandCampaignGetV30DataCampaignsCampaignStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignGetV30DataCampaignsCampaignStatus', $value));
        }
        return (string) $value;
    }
}
