<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType
{
    public const ANNIVERSARY_CELEBRATION_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'ANNIVERSARY_CELEBRATION';
    public const FESTIVAL_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'FESTIVAL';
    public const LAUNCH_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'LAUNCH';
    public const OTHERS_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'OTHERS';
    public const REGULAR_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'REGULAR';
    public const VERSION_UPDATE_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'VERSION_UPDATE';
    public const RESERVATION_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType = 'RESERVATION';

    public const ALLOWED_VALUES = [
        self::ANNIVERSARY_CELEBRATION_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::FESTIVAL_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::LAUNCH_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::OTHERS_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::REGULAR_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::VERSION_UPDATE_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
        self::RESERVATION_StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataProductAdditionalIntroductionGamePromotionEventPromotionType', $value));
        }
        return (string) $value;
    }
}
