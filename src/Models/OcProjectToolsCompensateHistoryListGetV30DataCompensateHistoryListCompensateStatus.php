<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus
{
    public const CONFIRMING_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'CONFIRMING';
    public const DEFAULT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'DEFAULT';
    public const ENDED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'ENDED';
    public const FAILED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'FAILED';
    public const INVALID_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'INVALID';
    public const IN_EFFECT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'IN_EFFECT';
    public const PAID_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'PAID';
    public const UNSUPPORTED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus = 'UNSUPPORTED';

    public const ALLOWED_VALUES = [
        self::CONFIRMING_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::DEFAULT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::ENDED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::FAILED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::INVALID_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::IN_EFFECT_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::PAID_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
        self::UNSUPPORTED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateStatus', $value));
        }
        return (string) $value;
    }
}
