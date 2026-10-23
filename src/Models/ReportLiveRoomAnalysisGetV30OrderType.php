<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportLiveRoomAnalysisGetV30OrderType
{
    public const ASC_ReportLiveRoomAnalysisGetV30OrderType = 'ASC';
    public const DESC_ReportLiveRoomAnalysisGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ReportLiveRoomAnalysisGetV30OrderType,
        self::DESC_ReportLiveRoomAnalysisGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportLiveRoomAnalysisGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
