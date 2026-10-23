<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30DataErrorListObjectType
{
    public const BUDGET_PromotionUpdateV30DataErrorListObjectType = 'BUDGET';
    public const KEYWORDS_PromotionUpdateV30DataErrorListObjectType = 'KEYWORDS';
    public const PROJECT_SETTING_PromotionUpdateV30DataErrorListObjectType = 'PROJECT_SETTING';
    public const PROMOTION_BUDGET_PromotionUpdateV30DataErrorListObjectType = 'PROMOTION_BUDGET';
    public const PROMOTION_MATERIAL_PromotionUpdateV30DataErrorListObjectType = 'PROMOTION_MATERIAL';
    public const PROMOTION_SETTING_PromotionUpdateV30DataErrorListObjectType = 'PROMOTION_SETTING';

    public const ALLOWED_VALUES = [
        self::BUDGET_PromotionUpdateV30DataErrorListObjectType,
        self::KEYWORDS_PromotionUpdateV30DataErrorListObjectType,
        self::PROJECT_SETTING_PromotionUpdateV30DataErrorListObjectType,
        self::PROMOTION_BUDGET_PromotionUpdateV30DataErrorListObjectType,
        self::PROMOTION_MATERIAL_PromotionUpdateV30DataErrorListObjectType,
        self::PROMOTION_SETTING_PromotionUpdateV30DataErrorListObjectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30DataErrorListObjectType', $value));
        }
        return (string) $value;
    }
}
