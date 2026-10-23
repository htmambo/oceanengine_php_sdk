<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataProductInfoProductNameType
{
    public const CUSTOM_OcProjectMaterialGetV30DataProductInfoProductNameType = 'CUSTOM';
    public const DPA_OcProjectMaterialGetV30DataProductInfoProductNameType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_OcProjectMaterialGetV30DataProductInfoProductNameType,
        self::DPA_OcProjectMaterialGetV30DataProductInfoProductNameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataProductInfoProductNameType', $value));
        }
        return (string) $value;
    }
}
