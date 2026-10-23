<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV30DataSuccessListMatchType
{
    public const EXTENSIVE_KeywordCreateV30DataSuccessListMatchType = 'EXTENSIVE';
    public const PHRASE_KeywordCreateV30DataSuccessListMatchType = 'PHRASE';
    public const PRECISION_KeywordCreateV30DataSuccessListMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordCreateV30DataSuccessListMatchType,
        self::PHRASE_KeywordCreateV30DataSuccessListMatchType,
        self::PRECISION_KeywordCreateV30DataSuccessListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV30DataSuccessListMatchType', $value));
        }
        return (string) $value;
    }
}
