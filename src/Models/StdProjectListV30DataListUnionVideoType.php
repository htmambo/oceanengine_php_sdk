<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListUnionVideoType
{
    public const ORIGINAL_VIDEO_StdProjectListV30DataListUnionVideoType = 'ORIGINAL_VIDEO';
    public const REWARDED_VIDEO_StdProjectListV30DataListUnionVideoType = 'REWARDED_VIDEO';
    public const SPLASH_VIDEO_StdProjectListV30DataListUnionVideoType = 'SPLASH_VIDEO';

    public const ALLOWED_VALUES = [
        self::ORIGINAL_VIDEO_StdProjectListV30DataListUnionVideoType,
        self::REWARDED_VIDEO_StdProjectListV30DataListUnionVideoType,
        self::SPLASH_VIDEO_StdProjectListV30DataListUnionVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListUnionVideoType', $value));
        }
        return (string) $value;
    }
}
