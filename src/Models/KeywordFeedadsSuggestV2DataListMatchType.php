<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordFeedadsSuggestV2DataListMatchType
{
    public const EXTENSIVE_KeywordFeedadsSuggestV2DataListMatchType = 'EXTENSIVE';
    public const PRECISION_KeywordFeedadsSuggestV2DataListMatchType = 'PRECISION';
    public const PHRASE_KeywordFeedadsSuggestV2DataListMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordFeedadsSuggestV2DataListMatchType,
        self::PRECISION_KeywordFeedadsSuggestV2DataListMatchType,
        self::PHRASE_KeywordFeedadsSuggestV2DataListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordFeedadsSuggestV2DataListMatchType', $value));
        }
        return (string) $value;
    }
}
