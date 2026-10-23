<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsVideoMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
