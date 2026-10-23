<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudiencePlatform
{
    public const PC_AdGetV2DataAudiencePlatform = 'PC';
    public const ANDROID_AdGetV2DataAudiencePlatform = 'ANDROID';
    public const HARMONY_AdGetV2DataAudiencePlatform = 'HARMONY';
    public const IPAD_AdGetV2DataAudiencePlatform = 'IPAD';
    public const IOS_AdGetV2DataAudiencePlatform = 'IOS';
    public const NONE_AdGetV2DataAudiencePlatform = 'NONE';
    public const WAP_AdGetV2DataAudiencePlatform = 'WAP';

    public const ALLOWED_VALUES = [
        self::PC_AdGetV2DataAudiencePlatform,
        self::ANDROID_AdGetV2DataAudiencePlatform,
        self::HARMONY_AdGetV2DataAudiencePlatform,
        self::IPAD_AdGetV2DataAudiencePlatform,
        self::IOS_AdGetV2DataAudiencePlatform,
        self::NONE_AdGetV2DataAudiencePlatform,
        self::WAP_AdGetV2DataAudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudiencePlatform', $value));
        }
        return (string) $value;
    }
}
