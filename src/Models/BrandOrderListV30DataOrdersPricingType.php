<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersPricingType
{
    public const GD_BrandOrderListV30DataOrdersPricingType = 'GD';

    public const ALLOWED_VALUES = [
        self::GD_BrandOrderListV30DataOrdersPricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersPricingType', $value));
        }
        return (string) $value;
    }
}
