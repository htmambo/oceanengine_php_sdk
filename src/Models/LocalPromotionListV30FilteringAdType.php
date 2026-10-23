<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringAdType
{
    public const ALL_LocalPromotionListV30FilteringAdType = 'ALL';
    public const GENERAL_LocalPromotionListV30FilteringAdType = 'GENERAL';
    public const SEARCHING_LocalPromotionListV30FilteringAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringAdType,
        self::GENERAL_LocalPromotionListV30FilteringAdType,
        self::SEARCHING_LocalPromotionListV30FilteringAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringAdType', $value));
        }
        return (string) $value;
    }
}
