<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2Platform
{
    public const PC_AudiencePackageUpdateV2Platform = 'PC';
    public const ANDROID_AudiencePackageUpdateV2Platform = 'ANDROID';
    public const HARMONY_AudiencePackageUpdateV2Platform = 'HARMONY';
    public const IPAD_AudiencePackageUpdateV2Platform = 'IPAD';
    public const IOS_AudiencePackageUpdateV2Platform = 'IOS';
    public const WAP_AudiencePackageUpdateV2Platform = 'WAP';

    public const ALLOWED_VALUES = [
        self::PC_AudiencePackageUpdateV2Platform,
        self::ANDROID_AudiencePackageUpdateV2Platform,
        self::HARMONY_AudiencePackageUpdateV2Platform,
        self::IPAD_AudiencePackageUpdateV2Platform,
        self::IOS_AudiencePackageUpdateV2Platform,
        self::WAP_AudiencePackageUpdateV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2Platform', $value));
        }
        return (string) $value;
    }
}
