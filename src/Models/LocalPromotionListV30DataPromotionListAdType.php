<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30DataPromotionListAdType
{
    public const GENERAL_LocalPromotionListV30DataPromotionListAdType = 'GENERAL';
    public const SEARCHING_LocalPromotionListV30DataPromotionListAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalPromotionListV30DataPromotionListAdType,
        self::SEARCHING_LocalPromotionListV30DataPromotionListAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30DataPromotionListAdType', $value));
        }
        return (string) $value;
    }
}
