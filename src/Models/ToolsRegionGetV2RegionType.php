<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRegionGetV2RegionType
{
    public const BUSINESS_DISTRICT_ToolsRegionGetV2RegionType = 'BUSINESS_DISTRICT';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_ToolsRegionGetV2RegionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRegionGetV2RegionType', $value));
        }
        return (string) $value;
    }
}
