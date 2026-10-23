<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30KeywordsMatchType
{
    public const EXTENSIVE_PromotionCreateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_PromotionCreateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_PromotionCreateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_PromotionCreateV30KeywordsMatchType,
        self::PHRASE_PromotionCreateV30KeywordsMatchType,
        self::PRECISION_PromotionCreateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
