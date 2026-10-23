<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataKeywordsMatchType
{
    public const EXTENSIVE_QianchuanAdDetailGetV10DataKeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_QianchuanAdDetailGetV10DataKeywordsMatchType = 'PHRASE';
    public const PRECISION_QianchuanAdDetailGetV10DataKeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_QianchuanAdDetailGetV10DataKeywordsMatchType,
        self::PHRASE_QianchuanAdDetailGetV10DataKeywordsMatchType,
        self::PRECISION_QianchuanAdDetailGetV10DataKeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataKeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
