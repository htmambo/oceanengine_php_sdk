<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10WordType
{
    public const KEY_WORD_QianchuanReportSearchWordGetV10WordType = 'KEY_WORD';
    public const SEARCH_WORD_QianchuanReportSearchWordGetV10WordType = 'SEARCH_WORD';

    public const ALLOWED_VALUES = [
        self::KEY_WORD_QianchuanReportSearchWordGetV10WordType,
        self::SEARCH_WORD_QianchuanReportSearchWordGetV10WordType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10WordType', $value));
        }
        return (string) $value;
    }
}
