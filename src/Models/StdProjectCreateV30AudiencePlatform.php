<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudiencePlatform
{
    public const ANDROID_StdProjectCreateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_StdProjectCreateV30AudiencePlatform = 'HARMONY';
    public const IOS_StdProjectCreateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_StdProjectCreateV30AudiencePlatform,
        self::HARMONY_StdProjectCreateV30AudiencePlatform,
        self::IOS_StdProjectCreateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
