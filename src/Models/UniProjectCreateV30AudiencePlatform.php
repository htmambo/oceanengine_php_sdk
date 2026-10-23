<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudiencePlatform
{
    public const ANDROID_UniProjectCreateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_UniProjectCreateV30AudiencePlatform = 'HARMONY';
    public const IOS_UniProjectCreateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_UniProjectCreateV30AudiencePlatform,
        self::HARMONY_UniProjectCreateV30AudiencePlatform,
        self::IOS_UniProjectCreateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
