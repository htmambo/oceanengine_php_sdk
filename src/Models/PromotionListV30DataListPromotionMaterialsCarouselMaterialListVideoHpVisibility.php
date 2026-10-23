<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_AFTER_END_DATE_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility = 'HIDE_AFTER_END_DATE';
    public const HIDE_AFTER_NO_PLAYBACK_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility = 'HIDE_AFTER_NO_PLAYBACK';
    public const HIDE_VIDEO_ON_HP_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility,
        self::HIDE_AFTER_END_DATE_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility,
        self::HIDE_AFTER_NO_PLAYBACK_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsCarouselMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
