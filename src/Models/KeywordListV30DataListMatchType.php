<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordListV30DataListMatchType
{
    public const EXTENSIVE_KeywordListV30DataListMatchType = 'EXTENSIVE';
    public const PHRASE_KeywordListV30DataListMatchType = 'PHRASE';
    public const PRECISION_KeywordListV30DataListMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordListV30DataListMatchType,
        self::PHRASE_KeywordListV30DataListMatchType,
        self::PRECISION_KeywordListV30DataListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordListV30DataListMatchType', $value));
        }
        return (string) $value;
    }
}
