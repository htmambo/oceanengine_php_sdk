<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType
{
    public const APP_GAME_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType = 'APP_SHOP';

    public const ALLOWED_VALUES = [
        self::APP_GAME_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType,
        self::APP_INTERNET_SERVICE_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType,
        self::APP_SHOP_ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30DataListStarTaskAnchorType', $value));
        }
        return (string) $value;
    }
}
