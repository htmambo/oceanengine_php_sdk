<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV2V2DataSuccessListMatchType
{
    public const EXTENSIVE_KeywordUpdateV2V2DataSuccessListMatchType = 'EXTENSIVE';
    public const PRECISION_KeywordUpdateV2V2DataSuccessListMatchType = 'PRECISION';
    public const PHRASE_KeywordUpdateV2V2DataSuccessListMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_KeywordUpdateV2V2DataSuccessListMatchType,
        self::PRECISION_KeywordUpdateV2V2DataSuccessListMatchType,
        self::PHRASE_KeywordUpdateV2V2DataSuccessListMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV2V2DataSuccessListMatchType', $value));
        }
        return (string) $value;
    }
}
