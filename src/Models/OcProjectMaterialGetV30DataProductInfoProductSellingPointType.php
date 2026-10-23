<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataProductInfoProductSellingPointType
{
    public const CUSTOM_OcProjectMaterialGetV30DataProductInfoProductSellingPointType = 'CUSTOM';
    public const DPA_OcProjectMaterialGetV30DataProductInfoProductSellingPointType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_OcProjectMaterialGetV30DataProductInfoProductSellingPointType,
        self::DPA_OcProjectMaterialGetV30DataProductInfoProductSellingPointType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataProductInfoProductSellingPointType', $value));
        }
        return (string) $value;
    }
}
