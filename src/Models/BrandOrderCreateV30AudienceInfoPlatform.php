<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoPlatform
{
    public const ANDROID_BrandOrderCreateV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandOrderCreateV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandOrderCreateV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandOrderCreateV30AudienceInfoPlatform,
        self::IOS_BrandOrderCreateV30AudienceInfoPlatform,
        self::UNLIMITED_BrandOrderCreateV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
