<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionCardRecommendTitleGetV2TextType
{
    public const CALL_TO_ACTION_ToolsPromotionCardRecommendTitleGetV2TextType = 'CALL_TO_ACTION';
    public const CARD_TITLE_ToolsPromotionCardRecommendTitleGetV2TextType = 'CARD_TITLE';
    public const PROMOTION_ToolsPromotionCardRecommendTitleGetV2TextType = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::CALL_TO_ACTION_ToolsPromotionCardRecommendTitleGetV2TextType,
        self::CARD_TITLE_ToolsPromotionCardRecommendTitleGetV2TextType,
        self::PROMOTION_ToolsPromotionCardRecommendTitleGetV2TextType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionCardRecommendTitleGetV2TextType', $value));
        }
        return (string) $value;
    }
}
