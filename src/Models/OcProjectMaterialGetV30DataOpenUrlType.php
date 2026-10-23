<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataOpenUrlType
{
    public const CUSTOM_OcProjectMaterialGetV30DataOpenUrlType = 'CUSTOM';
    public const DPA_OcProjectMaterialGetV30DataOpenUrlType = 'DPA';
    public const NONE_OcProjectMaterialGetV30DataOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_OcProjectMaterialGetV30DataOpenUrlType,
        self::DPA_OcProjectMaterialGetV30DataOpenUrlType,
        self::NONE_OcProjectMaterialGetV30DataOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataOpenUrlType', $value));
        }
        return (string) $value;
    }
}
