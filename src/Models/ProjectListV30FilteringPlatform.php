<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringPlatform
{
    public const ANDROID_ProjectListV30FilteringPlatform = 'ANDROID';
    public const HARMONY_ProjectListV30FilteringPlatform = 'HARMONY';
    public const IOS_ProjectListV30FilteringPlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_ProjectListV30FilteringPlatform,
        self::HARMONY_ProjectListV30FilteringPlatform,
        self::IOS_ProjectListV30FilteringPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringPlatform', $value));
        }
        return (string) $value;
    }
}
