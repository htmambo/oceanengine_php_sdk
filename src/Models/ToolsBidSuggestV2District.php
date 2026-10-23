<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2District
{
    public const COUNTY_ToolsBidSuggestV2District = 'COUNTY';
    public const BUSINESS_DISTRICT_ToolsBidSuggestV2District = 'BUSINESS_DISTRICT';
    public const OVERSEA_ToolsBidSuggestV2District = 'OVERSEA';
    public const CITY_ToolsBidSuggestV2District = 'CITY';
    public const REGION_ToolsBidSuggestV2District = 'REGION';
    public const NONE_ToolsBidSuggestV2District = 'NONE';

    public const ALLOWED_VALUES = [
        self::COUNTY_ToolsBidSuggestV2District,
        self::BUSINESS_DISTRICT_ToolsBidSuggestV2District,
        self::OVERSEA_ToolsBidSuggestV2District,
        self::CITY_ToolsBidSuggestV2District,
        self::REGION_ToolsBidSuggestV2District,
        self::NONE_ToolsBidSuggestV2District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2District', $value));
        }
        return (string) $value;
    }
}
