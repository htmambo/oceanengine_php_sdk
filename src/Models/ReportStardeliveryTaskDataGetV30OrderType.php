<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30OrderType
{
    public const ASC_ReportStardeliveryTaskDataGetV30OrderType = 'ASC';
    public const DESC_ReportStardeliveryTaskDataGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ReportStardeliveryTaskDataGetV30OrderType,
        self::DESC_ReportStardeliveryTaskDataGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
