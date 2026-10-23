<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataProductInfoProductImageType
{
    public const CUSTOM_OcProjectMaterialGetV30DataProductInfoProductImageType = 'CUSTOM';
    public const DPA_OcProjectMaterialGetV30DataProductInfoProductImageType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_OcProjectMaterialGetV30DataProductInfoProductImageType,
        self::DPA_OcProjectMaterialGetV30DataProductInfoProductImageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataProductInfoProductImageType', $value));
        }
        return (string) $value;
    }
}
