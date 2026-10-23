<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordGetV2DataListMatchType
{
    public const EXTENSIVE_KeywordGetV2DataListMatchType = 'EXTENSIVE';
    public const PRECISION_KeywordGetV2DataListMatchType = 'PRECISION';
    public const PHRASE_KeywordGetV2DataListMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordGetV2DataListMatchType,
        self::PRECISION_KeywordGetV2DataListMatchType,
        self::PHRASE_KeywordGetV2DataListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordGetV2DataListMatchType', $value));
        }
        return (string) $value;
    }
}
