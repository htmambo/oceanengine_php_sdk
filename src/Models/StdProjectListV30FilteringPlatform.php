<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringPlatform
{
    public const ANDROID_StdProjectListV30FilteringPlatform = 'ANDROID';
    public const HARMONY_StdProjectListV30FilteringPlatform = 'HARMONY';
    public const IOS_StdProjectListV30FilteringPlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_StdProjectListV30FilteringPlatform,
        self::HARMONY_StdProjectListV30FilteringPlatform,
        self::IOS_StdProjectListV30FilteringPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringPlatform', $value));
        }
        return (string) $value;
    }
}
