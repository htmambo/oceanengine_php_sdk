<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudiencePlatform
{
    public const ANDROID_QianchuanAdCreateV10AudiencePlatform = 'ANDROID';
    public const IOS_QianchuanAdCreateV10AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_QianchuanAdCreateV10AudiencePlatform,
        self::IOS_QianchuanAdCreateV10AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
