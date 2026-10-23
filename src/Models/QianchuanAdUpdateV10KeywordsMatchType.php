<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10KeywordsMatchType
{
    public const EXTENSIVE_QianchuanAdUpdateV10KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanAdUpdateV10KeywordsMatchType = 'PHRASE';
    public const PRECISION_QianchuanAdUpdateV10KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_QianchuanAdUpdateV10KeywordsMatchType,
        self::PHRASE_QianchuanAdUpdateV10KeywordsMatchType,
        self::PRECISION_QianchuanAdUpdateV10KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
