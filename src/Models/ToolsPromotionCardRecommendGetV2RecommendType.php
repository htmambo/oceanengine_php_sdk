<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionCardRecommendGetV2RecommendType
{
    public const SELLING_POINTS_ToolsPromotionCardRecommendGetV2RecommendType = 'SELLING_POINTS';
    public const PRODUCT_DESCRIPTION_ToolsPromotionCardRecommendGetV2RecommendType = 'PRODUCT_DESCRIPTION';
    public const CALL_TO_ACTION_ToolsPromotionCardRecommendGetV2RecommendType = 'CALL_TO_ACTION';

    public const ALLOWED_VALUES = [
        self::SELLING_POINTS_ToolsPromotionCardRecommendGetV2RecommendType,
        self::PRODUCT_DESCRIPTION_ToolsPromotionCardRecommendGetV2RecommendType,
        self::CALL_TO_ACTION_ToolsPromotionCardRecommendGetV2RecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionCardRecommendGetV2RecommendType', $value));
        }
        return (string) $value;
    }
}
