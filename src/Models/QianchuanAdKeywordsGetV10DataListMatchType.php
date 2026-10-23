<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdKeywordsGetV10DataListMatchType
{
    public const EXTENSIVE_QianchuanAdKeywordsGetV10DataListMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanAdKeywordsGetV10DataListMatchType = 'PHRASE';
    public const PRECISION_QianchuanAdKeywordsGetV10DataListMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_QianchuanAdKeywordsGetV10DataListMatchType,
        self::PHRASE_QianchuanAdKeywordsGetV10DataListMatchType,
        self::PRECISION_QianchuanAdKeywordsGetV10DataListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdKeywordsGetV10DataListMatchType', $value));
        }
        return (string) $value;
    }
}
