<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_AFTER_END_DATE_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility = 'HIDE_AFTER_END_DATE';
    public const HIDE_AFTER_NO_PLAYBACK_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility = 'HIDE_AFTER_NO_PLAYBACK';
    public const HIDE_VIDEO_ON_HP_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility,
        self::HIDE_AFTER_END_DATE_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility,
        self::HIDE_AFTER_NO_PLAYBACK_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
