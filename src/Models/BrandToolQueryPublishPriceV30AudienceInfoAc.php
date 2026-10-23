<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AudienceInfoAc
{
    public const UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandToolQueryPublishPriceV30AudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoAc,
        self::WIFI_BrandToolQueryPublishPriceV30AudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
