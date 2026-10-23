<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoAc
{
    public const UNLIMITED_BrandOrderCreateV30AudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandOrderCreateV30AudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandOrderCreateV30AudienceInfoAc,
        self::WIFI_BrandOrderCreateV30AudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
