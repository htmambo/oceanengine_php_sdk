<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudiencePlatform
{
    public const ANDROID_StdProjectUpdateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_StdProjectUpdateV30AudiencePlatform = 'HARMONY';
    public const IOS_StdProjectUpdateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_StdProjectUpdateV30AudiencePlatform,
        self::HARMONY_StdProjectUpdateV30AudiencePlatform,
        self::IOS_StdProjectUpdateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
