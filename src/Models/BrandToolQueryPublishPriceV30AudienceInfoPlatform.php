<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AudienceInfoPlatform
{
    public const ANDROID_BrandToolQueryPublishPriceV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandToolQueryPublishPriceV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandToolQueryPublishPriceV30AudienceInfoPlatform,
        self::IOS_BrandToolQueryPublishPriceV30AudienceInfoPlatform,
        self::UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
