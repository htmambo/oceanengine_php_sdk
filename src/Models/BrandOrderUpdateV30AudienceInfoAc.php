<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoAc
{
    public const UNLIMITED_BrandOrderUpdateV30AudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandOrderUpdateV30AudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandOrderUpdateV30AudienceInfoAc,
        self::WIFI_BrandOrderUpdateV30AudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
