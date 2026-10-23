<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsKeywordListV30DataListFirstStatus
{
    public const ADJUSTING_OcProjectToolsKeywordListV30DataListFirstStatus = 'ADJUSTING';
    public const DELETED_OcProjectToolsKeywordListV30DataListFirstStatus = 'DELETED';
    public const FINISH_OcProjectToolsKeywordListV30DataListFirstStatus = 'FINISH';
    public const TERMINAL_OcProjectToolsKeywordListV30DataListFirstStatus = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsKeywordListV30DataListFirstStatus = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsKeywordListV30DataListFirstStatus,
        self::DELETED_OcProjectToolsKeywordListV30DataListFirstStatus,
        self::FINISH_OcProjectToolsKeywordListV30DataListFirstStatus,
        self::TERMINAL_OcProjectToolsKeywordListV30DataListFirstStatus,
        self::UNADJUSTED_OcProjectToolsKeywordListV30DataListFirstStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsKeywordListV30DataListFirstStatus', $value));
        }
        return (string) $value;
    }
}
