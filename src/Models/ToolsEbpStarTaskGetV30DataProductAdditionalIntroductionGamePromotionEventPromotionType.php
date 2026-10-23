<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType
{
    public const ANNIVERSARY_CELEBRATION_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'ANNIVERSARY_CELEBRATION';
    public const FESTIVAL_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'FESTIVAL';
    public const LAUNCH_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'LAUNCH';
    public const OTHERS_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'OTHERS';
    public const REGULAR_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'REGULAR';
    public const VERSION_UPDATE_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'VERSION_UPDATE';
    public const RESERVATION_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'RESERVATION';

    public const ALLOWED_VALUES = [
        self::ANNIVERSARY_CELEBRATION_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::FESTIVAL_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::LAUNCH_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::OTHERS_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::REGULAR_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::VERSION_UPDATE_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::RESERVATION_ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataProductAdditionalIntroductionGamePromotionEventPromotionType', $value));
        }
        return (string) $value;
    }
}
