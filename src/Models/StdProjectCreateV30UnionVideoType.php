<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30UnionVideoType
{
    public const ORIGINAL_VIDEO_StdProjectCreateV30UnionVideoType = 'ORIGINAL_VIDEO';
    public const REWARDED_VIDEO_StdProjectCreateV30UnionVideoType = 'REWARDED_VIDEO';
    public const SPLASH_VIDEO_StdProjectCreateV30UnionVideoType = 'SPLASH_VIDEO';

    public const ALLOWED_VALUES = [
        self::ORIGINAL_VIDEO_StdProjectCreateV30UnionVideoType,
        self::REWARDED_VIDEO_StdProjectCreateV30UnionVideoType,
        self::SPLASH_VIDEO_StdProjectCreateV30UnionVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30UnionVideoType', $value));
        }
        return (string) $value;
    }
}
