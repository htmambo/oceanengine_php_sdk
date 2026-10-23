<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudiencePlatform
{
    public const ANDROID_QianchuanAdUpdateV10AudiencePlatform = 'ANDROID';
    public const IOS_QianchuanAdUpdateV10AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_QianchuanAdUpdateV10AudiencePlatform,
        self::IOS_QianchuanAdUpdateV10AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
