<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionCreateV30LiveMaterialType
{
    public const LIVE_LocalPromotionCreateV30LiveMaterialType = 'LIVE';
    public const VIDEO_LocalPromotionCreateV30LiveMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalPromotionCreateV30LiveMaterialType,
        self::VIDEO_LocalPromotionCreateV30LiveMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionCreateV30LiveMaterialType', $value));
        }
        return (string) $value;
    }
}
