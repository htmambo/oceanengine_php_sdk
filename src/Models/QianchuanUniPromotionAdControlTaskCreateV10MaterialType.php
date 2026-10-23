<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskCreateV10MaterialType
{
    public const VIDEO_QianchuanUniPromotionAdControlTaskCreateV10MaterialType = 'VIDEO';
    public const LIVE_ROOM_QianchuanUniPromotionAdControlTaskCreateV10MaterialType = 'LIVE_ROOM';

    public const ALLOWED_VALUES = [
        self::VIDEO_QianchuanUniPromotionAdControlTaskCreateV10MaterialType,
        self::LIVE_ROOM_QianchuanUniPromotionAdControlTaskCreateV10MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskCreateV10MaterialType', $value));
        }
        return (string) $value;
    }
}
