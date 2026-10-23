<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AppOrigin
{
    public const AWEME_BrandOrderCreateV30AppOrigin = 'AWEME';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandOrderCreateV30AppOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AppOrigin', $value));
        }
        return (string) $value;
    }
}
