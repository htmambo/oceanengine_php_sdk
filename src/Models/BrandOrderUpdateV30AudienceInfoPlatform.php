<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoPlatform
{
    public const ANDROID_BrandOrderUpdateV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandOrderUpdateV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandOrderUpdateV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandOrderUpdateV30AudienceInfoPlatform,
        self::IOS_BrandOrderUpdateV30AudienceInfoPlatform,
        self::UNLIMITED_BrandOrderUpdateV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
