<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionCreateV30VideoHpVisibility
{
    public const ALWAYS_VISIBLE_LocalPromotionCreateV30VideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_LocalPromotionCreateV30VideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_LocalPromotionCreateV30VideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_LocalPromotionCreateV30VideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionCreateV30VideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
