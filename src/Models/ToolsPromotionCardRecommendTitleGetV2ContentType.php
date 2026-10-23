<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionCardRecommendTitleGetV2ContentType
{
    public const UNKNOWN_ToolsPromotionCardRecommendTitleGetV2ContentType = 'UNKNOWN';
    public const DOWNLOAD_ToolsPromotionCardRecommendTitleGetV2ContentType = 'DOWNLOAD';
    public const CARD_ToolsPromotionCardRecommendTitleGetV2ContentType = 'CARD';
    public const PHONE_ToolsPromotionCardRecommendTitleGetV2ContentType = 'PHONE';
    public const TABLE_ToolsPromotionCardRecommendTitleGetV2ContentType = 'TABLE';
    public const GAME_SUBSCRIBE_ToolsPromotionCardRecommendTitleGetV2ContentType = 'GAME_SUBSCRIBE';
    public const GAME_PACKAGE_ToolsPromotionCardRecommendTitleGetV2ContentType = 'GAME_PACKAGE';
    public const CONSULT_ToolsPromotionCardRecommendTitleGetV2ContentType = 'CONSULT';
    public const GAME_FORM_ToolsPromotionCardRecommendTitleGetV2ContentType = 'GAME_FORM';
    public const LANDING_ToolsPromotionCardRecommendTitleGetV2ContentType = 'LANDING';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::DOWNLOAD_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::CARD_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::PHONE_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::TABLE_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::GAME_SUBSCRIBE_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::GAME_PACKAGE_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::CONSULT_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::GAME_FORM_ToolsPromotionCardRecommendTitleGetV2ContentType,
        self::LANDING_ToolsPromotionCardRecommendTitleGetV2ContentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionCardRecommendTitleGetV2ContentType', $value));
        }
        return (string) $value;
    }
}
