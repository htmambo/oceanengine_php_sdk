<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30KeywordsMatchType
{
    public const EXTENSIVE_StdProjectCreateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_StdProjectCreateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_StdProjectCreateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_StdProjectCreateV30KeywordsMatchType,
        self::PHRASE_StdProjectCreateV30KeywordsMatchType,
        self::PRECISION_StdProjectCreateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
