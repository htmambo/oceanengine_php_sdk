<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV30DataSuccessListMatchType
{
    public const EXTENSIVE_KeywordUpdateV30DataSuccessListMatchType = 'EXTENSIVE';
    public const PHRASE_KeywordUpdateV30DataSuccessListMatchType = 'PHRASE';
    public const PRECISION_KeywordUpdateV30DataSuccessListMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordUpdateV30DataSuccessListMatchType,
        self::PHRASE_KeywordUpdateV30DataSuccessListMatchType,
        self::PRECISION_KeywordUpdateV30DataSuccessListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV30DataSuccessListMatchType', $value));
        }
        return (string) $value;
    }
}
