<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsKeywordListV30FilteringSecondStatus
{
    public const ALL_KEYWORD_DELETED_OcProjectToolsKeywordListV30FilteringSecondStatus = 'ALL_KEYWORD_DELETED';
    public const DISABLE_OcProjectToolsKeywordListV30FilteringSecondStatus = 'DISABLE';
    public const KEYWORD_ADJUST_AUDITING_OcProjectToolsKeywordListV30FilteringSecondStatus = 'KEYWORD_ADJUST_AUDITING';
    public const KEYWORD_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsKeywordListV30FilteringSecondStatus = 'KEYWORD_ADJUST_NEW_CREATED_AUDITING';
    public const TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsKeywordListV30FilteringSecondStatus = 'TASK_BID_EXCEEDS_PROJECT_BUDGET';

    public const ALLOWED_VALUES = [
        self::ALL_KEYWORD_DELETED_OcProjectToolsKeywordListV30FilteringSecondStatus,
        self::DISABLE_OcProjectToolsKeywordListV30FilteringSecondStatus,
        self::KEYWORD_ADJUST_AUDITING_OcProjectToolsKeywordListV30FilteringSecondStatus,
        self::KEYWORD_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsKeywordListV30FilteringSecondStatus,
        self::TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsKeywordListV30FilteringSecondStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsKeywordListV30FilteringSecondStatus', $value));
        }
        return (string) $value;
    }
}
