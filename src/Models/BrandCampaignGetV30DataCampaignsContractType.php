<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCampaignGetV30DataCampaignsContractType
{
    public const Enum_1_BrandCampaignGetV30DataCampaignsContractType = 1;
    public const Enum_2_BrandCampaignGetV30DataCampaignsContractType = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandCampaignGetV30DataCampaignsContractType,
        self::Enum_2_BrandCampaignGetV30DataCampaignsContractType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCampaignGetV30DataCampaignsContractType', $value));
        }
        return (string) $value;
    }
}
