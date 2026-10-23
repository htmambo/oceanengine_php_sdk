<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudiencePlatform
{
    public const ANDROID_QianchuanAdDetailGetV10DataAudiencePlatform = 'ANDROID';
    public const IOS_QianchuanAdDetailGetV10DataAudiencePlatform = 'IOS';
    public const IPAD_QianchuanAdDetailGetV10DataAudiencePlatform = 'IPAD';
    public const NONE_QianchuanAdDetailGetV10DataAudiencePlatform = 'NONE';
    public const PC_QianchuanAdDetailGetV10DataAudiencePlatform = 'PC';
    public const WAP_QianchuanAdDetailGetV10DataAudiencePlatform = 'WAP';

    public const ALLOWED_VALUES = [
        self::ANDROID_QianchuanAdDetailGetV10DataAudiencePlatform,
        self::IOS_QianchuanAdDetailGetV10DataAudiencePlatform,
        self::IPAD_QianchuanAdDetailGetV10DataAudiencePlatform,
        self::NONE_QianchuanAdDetailGetV10DataAudiencePlatform,
        self::PC_QianchuanAdDetailGetV10DataAudiencePlatform,
        self::WAP_QianchuanAdDetailGetV10DataAudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudiencePlatform', $value));
        }
        return (string) $value;
    }
}
