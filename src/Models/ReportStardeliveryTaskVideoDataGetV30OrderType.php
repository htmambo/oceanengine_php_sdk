<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskVideoDataGetV30OrderType
{
    public const ASC_ReportStardeliveryTaskVideoDataGetV30OrderType = 'ASC';
    public const DESC_ReportStardeliveryTaskVideoDataGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ReportStardeliveryTaskVideoDataGetV30OrderType,
        self::DESC_ReportStardeliveryTaskVideoDataGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskVideoDataGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
