<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30Classify
{
    public const SALE_BrandToolQueryPublishPriceV30Classify = 'SALE';

    public const ALLOWED_VALUES = [
        self::SALE_BrandToolQueryPublishPriceV30Classify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30Classify', $value));
        }
        return (string) $value;
    }
}
