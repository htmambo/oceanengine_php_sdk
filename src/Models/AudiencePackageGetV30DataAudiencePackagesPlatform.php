<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesPlatform
{
    public const ANDROID_AudiencePackageGetV30DataAudiencePackagesPlatform = 'ANDROID';
    public const HARMONY_AudiencePackageGetV30DataAudiencePackagesPlatform = 'HARMONY';
    public const IOS_AudiencePackageGetV30DataAudiencePackagesPlatform = 'IOS';
    public const IPAD_AudiencePackageGetV30DataAudiencePackagesPlatform = 'IPAD';
    public const NONE_AudiencePackageGetV30DataAudiencePackagesPlatform = 'NONE';
    public const PC_AudiencePackageGetV30DataAudiencePackagesPlatform = 'PC';
    public const WAP_AudiencePackageGetV30DataAudiencePackagesPlatform = 'WAP';

    public const ALLOWED_VALUES = [
        self::ANDROID_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::HARMONY_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::IOS_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::IPAD_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::NONE_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::PC_AudiencePackageGetV30DataAudiencePackagesPlatform,
        self::WAP_AudiencePackageGetV30DataAudiencePackagesPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesPlatform', $value));
        }
        return (string) $value;
    }
}
