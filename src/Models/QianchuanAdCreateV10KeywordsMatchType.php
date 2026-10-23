<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10KeywordsMatchType
{
    public const EXTENSIVE_QianchuanAdCreateV10KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanAdCreateV10KeywordsMatchType = 'PHRASE';
    public const PRECISION_QianchuanAdCreateV10KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_QianchuanAdCreateV10KeywordsMatchType,
        self::PHRASE_QianchuanAdCreateV10KeywordsMatchType,
        self::PRECISION_QianchuanAdCreateV10KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
