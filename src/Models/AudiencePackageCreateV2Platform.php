<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2Platform
{
    public const PC_AudiencePackageCreateV2Platform = 'PC';
    public const ANDROID_AudiencePackageCreateV2Platform = 'ANDROID';
    public const HARMONY_AudiencePackageCreateV2Platform = 'HARMONY';
    public const IPAD_AudiencePackageCreateV2Platform = 'IPAD';
    public const IOS_AudiencePackageCreateV2Platform = 'IOS';
    public const WAP_AudiencePackageCreateV2Platform = 'WAP';

    public const ALLOWED_VALUES = [
        self::PC_AudiencePackageCreateV2Platform,
        self::ANDROID_AudiencePackageCreateV2Platform,
        self::HARMONY_AudiencePackageCreateV2Platform,
        self::IPAD_AudiencePackageCreateV2Platform,
        self::IOS_AudiencePackageCreateV2Platform,
        self::WAP_AudiencePackageCreateV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2Platform', $value));
        }
        return (string) $value;
    }
}
