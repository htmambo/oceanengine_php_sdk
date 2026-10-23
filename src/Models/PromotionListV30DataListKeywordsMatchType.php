<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListKeywordsMatchType
{
    public const EXTENSIVE_PromotionListV30DataListKeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_PromotionListV30DataListKeywordsMatchType = 'PHRASE';
    public const PRECISION_PromotionListV30DataListKeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_PromotionListV30DataListKeywordsMatchType,
        self::PHRASE_PromotionListV30DataListKeywordsMatchType,
        self::PRECISION_PromotionListV30DataListKeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListKeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
