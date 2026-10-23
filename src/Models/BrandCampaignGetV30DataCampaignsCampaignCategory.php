<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignGetV30DataCampaignsCampaignCategory
{
    public const Enum_1_BrandCampaignGetV30DataCampaignsCampaignCategory = 1;
    public const Enum_2_BrandCampaignGetV30DataCampaignsCampaignCategory = 2;
    public const Enum_3_BrandCampaignGetV30DataCampaignsCampaignCategory = 3;
    public const Enum_4_BrandCampaignGetV30DataCampaignsCampaignCategory = 4;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandCampaignGetV30DataCampaignsCampaignCategory,
        self::Enum_2_BrandCampaignGetV30DataCampaignsCampaignCategory,
        self::Enum_3_BrandCampaignGetV30DataCampaignsCampaignCategory,
        self::Enum_4_BrandCampaignGetV30DataCampaignsCampaignCategory,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignGetV30DataCampaignsCampaignCategory', $value));
        }
        return (string) $value;
    }
}
