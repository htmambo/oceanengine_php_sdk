<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV30KeywordsMatchType
{
    public const EXTENSIVE_KeywordCreateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_KeywordCreateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_KeywordCreateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordCreateV30KeywordsMatchType,
        self::PHRASE_KeywordCreateV30KeywordsMatchType,
        self::PRECISION_KeywordCreateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
