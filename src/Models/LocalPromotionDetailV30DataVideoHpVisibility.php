<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionDetailV30DataVideoHpVisibility
{
    public const ALWAYS_VISIBLE_LocalPromotionDetailV30DataVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_LocalPromotionDetailV30DataVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_LocalPromotionDetailV30DataVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_LocalPromotionDetailV30DataVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionDetailV30DataVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
