<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30PricingType
{
    public const GD_BrandToolQueryPublishPriceV30PricingType = 'GD';

    public const ALLOWED_VALUES = [
        self::GD_BrandToolQueryPublishPriceV30PricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30PricingType', $value));
        }
        return (string) $value;
    }
}
