<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30AudiencePlatform
{
    public const ANDROID_UniProjectUpdateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_UniProjectUpdateV30AudiencePlatform = 'HARMONY';
    public const IOS_UniProjectUpdateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_UniProjectUpdateV30AudiencePlatform,
        self::HARMONY_UniProjectUpdateV30AudiencePlatform,
        self::IOS_UniProjectUpdateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
