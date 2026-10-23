<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AppOrigin
{
    public const AWEME_BrandToolQueryPublishPriceV30AppOrigin = 'AWEME';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandToolQueryPublishPriceV30AppOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AppOrigin', $value));
        }
        return (string) $value;
    }
}
