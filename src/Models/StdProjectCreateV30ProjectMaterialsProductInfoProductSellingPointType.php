<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType
{
    public const CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType = 'CUSTOM';
    public const DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType,
        self::DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsProductInfoProductSellingPointType', $value));
        }
        return (string) $value;
    }
}
