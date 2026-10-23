<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoPlatform
{
    public const ANDROID_BrandOrderListV30DataOrdersAudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandOrderListV30DataOrdersAudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandOrderListV30DataOrdersAudienceInfoPlatform,
        self::IOS_BrandOrderListV30DataOrdersAudienceInfoPlatform,
        self::UNLIMITED_BrandOrderListV30DataOrdersAudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
