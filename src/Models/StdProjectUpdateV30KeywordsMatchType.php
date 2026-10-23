<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30KeywordsMatchType
{
    public const EXTENSIVE_StdProjectUpdateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_StdProjectUpdateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_StdProjectUpdateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_StdProjectUpdateV30KeywordsMatchType,
        self::PHRASE_StdProjectUpdateV30KeywordsMatchType,
        self::PRECISION_StdProjectUpdateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
