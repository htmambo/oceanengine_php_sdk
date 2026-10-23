<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoAwemeGetV30DataVideoListQualityMark
{
    public const FIRST_PUBLISH_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'FIRST_PUBLISH';
    public const FIRST_PUBLISH_AND_HIGH_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'FIRST_PUBLISH_AND_HIGH_QUALITY';
    public const HIGH_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'HIGH_QUALITY';
    public const LOW_EFFECTIVE_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'LOW_EFFECTIVE';
    public const LOW_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'LOW_QUALITY';
    public const MORE_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'MORE';
    public const NEGATIVE_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'NEGATIVE';
    public const NONE_LocalFileVideoAwemeGetV30DataVideoListQualityMark = 'NONE';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::FIRST_PUBLISH_AND_HIGH_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::HIGH_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::LOW_EFFECTIVE_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::LOW_QUALITY_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::MORE_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::NEGATIVE_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
        self::NONE_LocalFileVideoAwemeGetV30DataVideoListQualityMark,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoAwemeGetV30DataVideoListQualityMark', $value));
        }
        return (string) $value;
    }
}
