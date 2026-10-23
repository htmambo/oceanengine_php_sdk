<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsKeywordListV30FilteringFirstStatus
{
    public const ADJUSTING_OcProjectToolsKeywordListV30FilteringFirstStatus = 'ADJUSTING';
    public const ALL_OcProjectToolsKeywordListV30FilteringFirstStatus = 'ALL';
    public const ALL_INCLUDE_DELETED_OcProjectToolsKeywordListV30FilteringFirstStatus = 'ALL_INCLUDE_DELETED';
    public const DELETED_OcProjectToolsKeywordListV30FilteringFirstStatus = 'DELETED';
    public const FINISH_OcProjectToolsKeywordListV30FilteringFirstStatus = 'FINISH';
    public const TERMINAL_OcProjectToolsKeywordListV30FilteringFirstStatus = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsKeywordListV30FilteringFirstStatus = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::ALL_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::ALL_INCLUDE_DELETED_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::DELETED_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::FINISH_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::TERMINAL_OcProjectToolsKeywordListV30FilteringFirstStatus,
        self::UNADJUSTED_OcProjectToolsKeywordListV30FilteringFirstStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsKeywordListV30FilteringFirstStatus', $value));
        }
        return (string) $value;
    }
}
