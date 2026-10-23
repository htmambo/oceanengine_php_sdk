<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30DataListStarTaskSource
{
    public const MY_CREATIONS_ReportStardeliveryTaskDataGetV30DataListStarTaskSource = 'MY_CREATIONS';
    public const SHARING_ReportStardeliveryTaskDataGetV30DataListStarTaskSource = 'SHARING';
    public const SHATE_EXPIRED_ReportStardeliveryTaskDataGetV30DataListStarTaskSource = 'SHATE_EXPIRED';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_ReportStardeliveryTaskDataGetV30DataListStarTaskSource,
        self::SHARING_ReportStardeliveryTaskDataGetV30DataListStarTaskSource,
        self::SHATE_EXPIRED_ReportStardeliveryTaskDataGetV30DataListStarTaskSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30DataListStarTaskSource', $value));
        }
        return (string) $value;
    }
}
