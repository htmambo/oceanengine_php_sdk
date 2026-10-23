<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30PricingType
{
    public const GD_BrandOrderCreateV30PricingType = 'GD';

    public const ALLOWED_VALUES = [
        self::GD_BrandOrderCreateV30PricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30PricingType', $value));
        }
        return (string) $value;
    }
}
