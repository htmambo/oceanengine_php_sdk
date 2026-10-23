<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV30KeywordsMatchType
{
    public const EXTENSIVE_KeywordUpdateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_KeywordUpdateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_KeywordUpdateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordUpdateV30KeywordsMatchType,
        self::PHRASE_KeywordUpdateV30KeywordsMatchType,
        self::PRECISION_KeywordUpdateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
