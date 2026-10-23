<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus
{
    public const AD_DELIVERY_STOPPED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus = 'AD_DELIVERY_STOPPED';
    public const INVISIBLE_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus = 'INVISIBLE';
    public const SHARING_CANCELED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus = 'SHARING_CANCELED';
    public const UNPUBLISHED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus = 'UNPUBLISHED';
    public const VISIBLE_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus = 'VISIBLE';

    public const ALLOWED_VALUES = [
        self::AD_DELIVERY_STOPPED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus,
        self::INVISIBLE_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus,
        self::SHARING_CANCELED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus,
        self::UNPUBLISHED_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus,
        self::VISIBLE_ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskVideoDataGetV30DataListStarVideoStatus', $value));
        }
        return (string) $value;
    }
}
