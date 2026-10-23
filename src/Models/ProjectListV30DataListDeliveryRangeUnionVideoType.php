<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryRangeUnionVideoType
{
    public const ORIGINAL_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType = 'ORIGINAL_VIDEO';
    public const REWARDED_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType = 'REWARDED_VIDEO';
    public const SPLASH_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType = 'SPLASH_VIDEO';

    public const ALLOWED_VALUES = [
        self::ORIGINAL_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType,
        self::REWARDED_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType,
        self::SPLASH_VIDEO_ProjectListV30DataListDeliveryRangeUnionVideoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryRangeUnionVideoType', $value));
        }
        return (string) $value;
    }
}
