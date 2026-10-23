<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignGetV30CampaignStatus
{
    public const Enum_1_BrandCampaignGetV30CampaignStatus = 1;
    public const Enum_10_BrandCampaignGetV30CampaignStatus = 10;
    public const Enum_11_BrandCampaignGetV30CampaignStatus = 11;
    public const Enum_2_BrandCampaignGetV30CampaignStatus = 2;
    public const Enum_3_BrandCampaignGetV30CampaignStatus = 3;
    public const Enum_4_BrandCampaignGetV30CampaignStatus = 4;
    public const Enum_5_BrandCampaignGetV30CampaignStatus = 5;
    public const Enum_6_BrandCampaignGetV30CampaignStatus = 6;
    public const Enum_7_BrandCampaignGetV30CampaignStatus = 7;
    public const Enum_8_BrandCampaignGetV30CampaignStatus = 8;
    public const Enum_9_BrandCampaignGetV30CampaignStatus = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandCampaignGetV30CampaignStatus,
        self::Enum_10_BrandCampaignGetV30CampaignStatus,
        self::Enum_11_BrandCampaignGetV30CampaignStatus,
        self::Enum_2_BrandCampaignGetV30CampaignStatus,
        self::Enum_3_BrandCampaignGetV30CampaignStatus,
        self::Enum_4_BrandCampaignGetV30CampaignStatus,
        self::Enum_5_BrandCampaignGetV30CampaignStatus,
        self::Enum_6_BrandCampaignGetV30CampaignStatus,
        self::Enum_7_BrandCampaignGetV30CampaignStatus,
        self::Enum_8_BrandCampaignGetV30CampaignStatus,
        self::Enum_9_BrandCampaignGetV30CampaignStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignGetV30CampaignStatus', $value));
        }
        return (string) $value;
    }
}
