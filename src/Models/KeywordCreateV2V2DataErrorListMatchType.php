<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV2V2DataErrorListMatchType
{
    public const EXTENSIVE_KeywordCreateV2V2DataErrorListMatchType = 'EXTENSIVE';
    public const PRECISION_KeywordCreateV2V2DataErrorListMatchType = 'PRECISION';
    public const PHRASE_KeywordCreateV2V2DataErrorListMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordCreateV2V2DataErrorListMatchType,
        self::PRECISION_KeywordCreateV2V2DataErrorListMatchType,
        self::PHRASE_KeywordCreateV2V2DataErrorListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV2V2DataErrorListMatchType', $value));
        }
        return (string) $value;
    }
}
