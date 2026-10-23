<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialUpdateV30MaterialListMaterialComponentAwemeAnchorAnchorType
{
    public const SHOPPING_CART_BrandMaterialUpdateV30MaterialListMaterialComponentAwemeAnchorAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::SHOPPING_CART_BrandMaterialUpdateV30MaterialListMaterialComponentAwemeAnchorAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialUpdateV30MaterialListMaterialComponentAwemeAnchorAnchorType', $value));
        }
        return (string) $value;
    }
}
