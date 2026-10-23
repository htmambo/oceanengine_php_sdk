<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportSearchWordGetV10DataListKeywordMatchType
{
    public const ALL_QianchuanReportSearchWordGetV10DataListKeywordMatchType = 'ALL';
    public const EXTENSIVE_QianchuanReportSearchWordGetV10DataListKeywordMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanReportSearchWordGetV10DataListKeywordMatchType = 'PHRASE';
    public const PRECISION_QianchuanReportSearchWordGetV10DataListKeywordMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportSearchWordGetV10DataListKeywordMatchType,
        self::EXTENSIVE_QianchuanReportSearchWordGetV10DataListKeywordMatchType,
        self::PHRASE_QianchuanReportSearchWordGetV10DataListKeywordMatchType,
        self::PRECISION_QianchuanReportSearchWordGetV10DataListKeywordMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportSearchWordGetV10DataListKeywordMatchType', $value));
        }
        return (string) $value;
    }
}
