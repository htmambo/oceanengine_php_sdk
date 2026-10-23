<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudiencePlatform
{
    public const ANDROID_ProjectCreateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_ProjectCreateV30AudiencePlatform = 'HARMONY';
    public const IOS_ProjectCreateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_ProjectCreateV30AudiencePlatform,
        self::HARMONY_ProjectCreateV30AudiencePlatform,
        self::IOS_ProjectCreateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
