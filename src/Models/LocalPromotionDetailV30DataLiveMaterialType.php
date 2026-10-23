<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionDetailV30DataLiveMaterialType
{
    public const LIVE_LocalPromotionDetailV30DataLiveMaterialType = 'LIVE';
    public const VIDEO_LocalPromotionDetailV30DataLiveMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::LIVE_LocalPromotionDetailV30DataLiveMaterialType,
        self::VIDEO_LocalPromotionDetailV30DataLiveMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionDetailV30DataLiveMaterialType', $value));
        }
        return (string) $value;
    }
}
