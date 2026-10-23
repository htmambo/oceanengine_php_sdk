<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsCarouselMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
