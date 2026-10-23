<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAnchorListV30DataAnchorListAnchorType
{
    public const SHOPPING_CART_BrandAnchorListV30DataAnchorListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::SHOPPING_CART_BrandAnchorListV30DataAnchorListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAnchorListV30DataAnchorListAnchorType', $value));
        }
        return (string) $value;
    }
}
