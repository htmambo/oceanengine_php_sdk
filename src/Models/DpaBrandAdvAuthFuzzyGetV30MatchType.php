<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthFuzzyGetV30MatchType
{
    public const EXACT_DpaBrandAdvAuthFuzzyGetV30MatchType = 'EXACT';
    public const FUZZY_DpaBrandAdvAuthFuzzyGetV30MatchType = 'FUZZY';

    public const ALLOWED_VALUES = [
        self::EXACT_DpaBrandAdvAuthFuzzyGetV30MatchType,
        self::FUZZY_DpaBrandAdvAuthFuzzyGetV30MatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthFuzzyGetV30MatchType', $value));
        }
        return (string) $value;
    }
}
