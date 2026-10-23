<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCountryInfoV2DataDistrictsDescription
{
    public const COUNTRY_ToolsCountryInfoV2DataDistrictsDescription = 'COUNTRY';
    public const STATE_ToolsCountryInfoV2DataDistrictsDescription = 'STATE';
    public const REGION_ToolsCountryInfoV2DataDistrictsDescription = 'REGION';

    public const ALLOWED_VALUES = [
        self::COUNTRY_ToolsCountryInfoV2DataDistrictsDescription,
        self::STATE_ToolsCountryInfoV2DataDistrictsDescription,
        self::REGION_ToolsCountryInfoV2DataDistrictsDescription,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCountryInfoV2DataDistrictsDescription', $value));
        }
        return (string) $value;
    }
}
