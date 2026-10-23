<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliveryRangeUnionVideoType
{
    public const ORIGINAL_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType = 'ORIGINAL_VIDEO';
    public const REWARDED_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType = 'REWARDED_VIDEO';
    public const SPLASH_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType = 'SPLASH_VIDEO';

    public const ALLOWED_VALUES = [
        self::ORIGINAL_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType,
        self::REWARDED_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType,
        self::SPLASH_VIDEO_ProjectCreateV30DeliveryRangeUnionVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliveryRangeUnionVideoType', $value));
        }
        return (string) $value;
    }
}
