<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30KeywordsMatchType
{
    public const EXTENSIVE_PromotionUpdateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_PromotionUpdateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_PromotionUpdateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_PromotionUpdateV30KeywordsMatchType,
        self::PHRASE_PromotionUpdateV30KeywordsMatchType,
        self::PRECISION_PromotionUpdateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
