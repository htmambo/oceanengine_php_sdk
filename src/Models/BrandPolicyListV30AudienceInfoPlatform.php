<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AudienceInfoPlatform
{
    public const ANDROID_BrandPolicyListV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandPolicyListV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandPolicyListV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandPolicyListV30AudienceInfoPlatform,
        self::IOS_BrandPolicyListV30AudienceInfoPlatform,
        self::UNLIMITED_BrandPolicyListV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
