<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordListV30DataListKeywordType
{
    public const CUSTOM_KeywordListV30DataListKeywordType = 'CUSTOM';
    public const BLUE_KeywordListV30DataListKeywordType = 'BLUE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordListV30DataListKeywordType,
        self::BLUE_KeywordListV30DataListKeywordType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordListV30DataListKeywordType', $value));
        }
        return (string) $value;
    }
}
