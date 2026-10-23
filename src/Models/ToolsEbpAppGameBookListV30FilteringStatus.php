<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppGameBookListV30FilteringStatus
{
    public const BOOKING_ToolsEbpAppGameBookListV30FilteringStatus = 'BOOKING';
    public const IN_USE_ToolsEbpAppGameBookListV30FilteringStatus = 'IN_USE';
    public const OFFLINE_ToolsEbpAppGameBookListV30FilteringStatus = 'OFFLINE';
    public const OFFLINE_BY_REG_ToolsEbpAppGameBookListV30FilteringStatus = 'OFFLINE_BY_REG';
    public const OVERDUE_ToolsEbpAppGameBookListV30FilteringStatus = 'OVERDUE';
    public const PUNISHED_ToolsEbpAppGameBookListV30FilteringStatus = 'PUNISHED';
    public const PUNISH_FIRST_LEVEL_ToolsEbpAppGameBookListV30FilteringStatus = 'PUNISH_FIRST_LEVEL';
    public const PUNISH_SECOND_LEVE_ToolsEbpAppGameBookListV30FilteringStatus = 'PUNISH_SECOND_LEVE';
    public const REVIEWING_ToolsEbpAppGameBookListV30FilteringStatus = 'REVIEWING';
    public const REVIEW_FAIL_ToolsEbpAppGameBookListV30FilteringStatus = 'REVIEW_FAIL';
    public const REVIEW_SUCCESS_ToolsEbpAppGameBookListV30FilteringStatus = 'REVIEW_SUCCESS';

    public const ALLOWED_VALUES = [
        self::BOOKING_ToolsEbpAppGameBookListV30FilteringStatus,
        self::IN_USE_ToolsEbpAppGameBookListV30FilteringStatus,
        self::OFFLINE_ToolsEbpAppGameBookListV30FilteringStatus,
        self::OFFLINE_BY_REG_ToolsEbpAppGameBookListV30FilteringStatus,
        self::OVERDUE_ToolsEbpAppGameBookListV30FilteringStatus,
        self::PUNISHED_ToolsEbpAppGameBookListV30FilteringStatus,
        self::PUNISH_FIRST_LEVEL_ToolsEbpAppGameBookListV30FilteringStatus,
        self::PUNISH_SECOND_LEVE_ToolsEbpAppGameBookListV30FilteringStatus,
        self::REVIEWING_ToolsEbpAppGameBookListV30FilteringStatus,
        self::REVIEW_FAIL_ToolsEbpAppGameBookListV30FilteringStatus,
        self::REVIEW_SUCCESS_ToolsEbpAppGameBookListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppGameBookListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
