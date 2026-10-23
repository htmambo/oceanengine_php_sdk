<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PenaltyTaskGetV30DataPenaltyTaskListBusinessLine
{
    public const AD_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine = 'AD';
    public const LOCAL_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine = 'LOCAL';
    public const QIANCHUAN_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine,
        self::LOCAL_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine,
        self::QIANCHUAN_PenaltyTaskGetV30DataPenaltyTaskListBusinessLine,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PenaltyTaskGetV30DataPenaltyTaskListBusinessLine', $value));
        }
        return (string) $value;
    }
}
