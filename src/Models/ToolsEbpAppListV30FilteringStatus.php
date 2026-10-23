<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppListV30FilteringStatus
{
    public const IN_USE_ToolsEbpAppListV30FilteringStatus = 'IN_USE';
    public const OFFLINE_ToolsEbpAppListV30FilteringStatus = 'OFFLINE';
    public const PUNISHED_ToolsEbpAppListV30FilteringStatus = 'PUNISHED';
    public const REVIEWING_ToolsEbpAppListV30FilteringStatus = 'REVIEWING';
    public const REVIEW_FAIL_ToolsEbpAppListV30FilteringStatus = 'REVIEW_FAIL';
    public const REVIEW_SUCCESS_ToolsEbpAppListV30FilteringStatus = 'REVIEW_SUCCESS';

    public const ALLOWED_VALUES = [
        self::IN_USE_ToolsEbpAppListV30FilteringStatus,
        self::OFFLINE_ToolsEbpAppListV30FilteringStatus,
        self::PUNISHED_ToolsEbpAppListV30FilteringStatus,
        self::REVIEWING_ToolsEbpAppListV30FilteringStatus,
        self::REVIEW_FAIL_ToolsEbpAppListV30FilteringStatus,
        self::REVIEW_SUCCESS_ToolsEbpAppListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
