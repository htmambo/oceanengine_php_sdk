<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportLiveRoomAnalysisGetV30DataListRoomStatus
{
    public const END_ReportLiveRoomAnalysisGetV30DataListRoomStatus = 'END';
    public const LIVING_ReportLiveRoomAnalysisGetV30DataListRoomStatus = 'LIVING';
    public const PAUSE_ReportLiveRoomAnalysisGetV30DataListRoomStatus = 'PAUSE';
    public const PREPARING_ReportLiveRoomAnalysisGetV30DataListRoomStatus = 'PREPARING';

    public const ALLOWED_VALUES = [
        self::END_ReportLiveRoomAnalysisGetV30DataListRoomStatus,
        self::LIVING_ReportLiveRoomAnalysisGetV30DataListRoomStatus,
        self::PAUSE_ReportLiveRoomAnalysisGetV30DataListRoomStatus,
        self::PREPARING_ReportLiveRoomAnalysisGetV30DataListRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportLiveRoomAnalysisGetV30DataListRoomStatus', $value));
        }
        return (string) $value;
    }
}
