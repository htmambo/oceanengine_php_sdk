<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataParamsType
{
    public const CUSTOM_OcProjectMaterialGetV30DataParamsType = 'CUSTOM';
    public const DPA_OcProjectMaterialGetV30DataParamsType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_OcProjectMaterialGetV30DataParamsType,
        self::DPA_OcProjectMaterialGetV30DataParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataParamsType', $value));
        }
        return (string) $value;
    }
}
