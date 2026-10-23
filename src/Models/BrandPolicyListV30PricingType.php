<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30PricingType
{
    public const GD_BrandPolicyListV30PricingType = 'GD';

    public const ALLOWED_VALUES = [
        self::GD_BrandPolicyListV30PricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30PricingType', $value));
        }
        return (string) $value;
    }
}
