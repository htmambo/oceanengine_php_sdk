<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataUnionVideoType
{
    public const ORIGINAL_VIDEO_AdGetV2DataUnionVideoType = 'ORIGINAL_VIDEO';
    public const REWARDED_VIDEO_AdGetV2DataUnionVideoType = 'REWARDED_VIDEO';
    public const SPLASH_VIDEO_AdGetV2DataUnionVideoType = 'SPLASH_VIDEO';

    public const ALLOWED_VALUES = [
        self::ORIGINAL_VIDEO_AdGetV2DataUnionVideoType,
        self::REWARDED_VIDEO_AdGetV2DataUnionVideoType,
        self::SPLASH_VIDEO_AdGetV2DataUnionVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataUnionVideoType', $value));
        }
        return (string) $value;
    }
}
