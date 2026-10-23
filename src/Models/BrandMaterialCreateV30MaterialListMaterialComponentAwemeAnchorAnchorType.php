<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType
{
    public const SHOPPING_CART_BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::SHOPPING_CART_BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30MaterialListMaterialComponentAwemeAnchorAnchorType', $value));
        }
        return (string) $value;
    }
}
