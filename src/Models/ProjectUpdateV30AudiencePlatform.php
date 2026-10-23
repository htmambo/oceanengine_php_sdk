<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudiencePlatform
{
    public const ANDROID_ProjectUpdateV30AudiencePlatform = 'ANDROID';
    public const HARMONY_ProjectUpdateV30AudiencePlatform = 'HARMONY';
    public const IOS_ProjectUpdateV30AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_ProjectUpdateV30AudiencePlatform,
        self::HARMONY_ProjectUpdateV30AudiencePlatform,
        self::IOS_ProjectUpdateV30AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
