<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringPromotionStatusFirst
{
    public const PROMOTION_STATUS_ALL_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_ALL';
    public const PROMOTION_STATUS_DELETED_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_DELETED';
    public const PROMOTION_STATUS_DISABLE_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_DISABLE';
    public const PROMOTION_STATUS_DONE_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_DONE';
    public const PROMOTION_STATUS_ENABLE_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_ENABLE';
    public const PROMOTION_STATUS_FROZEN_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_FROZEN';
    public const PROMOTION_STATUS_NOT_DELETE_LocalPromotionListV30FilteringPromotionStatusFirst = 'PROMOTION_STATUS_NOT_DELETE';

    public const ALLOWED_VALUES = [
        self::PROMOTION_STATUS_ALL_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_DELETED_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_DISABLE_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_DONE_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_ENABLE_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_FROZEN_LocalPromotionListV30FilteringPromotionStatusFirst,
        self::PROMOTION_STATUS_NOT_DELETE_LocalPromotionListV30FilteringPromotionStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringPromotionStatusFirst', $value));
        }
        return (string) $value;
    }
}
