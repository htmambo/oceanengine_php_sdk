<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10FilteringWordType
{
    public const KEY_WORD_QianchuanReportSearchWordGetV10FilteringWordType = 'KEY_WORD';
    public const SEARCH_WORD_QianchuanReportSearchWordGetV10FilteringWordType = 'SEARCH_WORD';

    public const ALLOWED_VALUES = [
        self::KEY_WORD_QianchuanReportSearchWordGetV10FilteringWordType,
        self::SEARCH_WORD_QianchuanReportSearchWordGetV10FilteringWordType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10FilteringWordType', $value));
        }
        return (string) $value;
    }
}
