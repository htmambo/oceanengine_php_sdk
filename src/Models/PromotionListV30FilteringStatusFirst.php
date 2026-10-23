<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringStatusFirst
{
    public const PROMOTION_STATUS_ALL_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_ALL';
    public const PROMOTION_STATUS_DELETED_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_DELETED';
    public const PROMOTION_STATUS_DISABLE_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_DISABLE';
    public const PROMOTION_STATUS_DONE_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_DONE';
    public const PROMOTION_STATUS_ENABLE_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_ENABLE';
    public const PROMOTION_STATUS_FROZEN_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_FROZEN';
    public const PROMOTION_STATUS_NOT_DELETE_PromotionListV30FilteringStatusFirst = 'PROMOTION_STATUS_NOT_DELETE';

    public const ALLOWED_VALUES = [
        self::PROMOTION_STATUS_ALL_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_DELETED_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_DISABLE_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_DONE_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_ENABLE_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_FROZEN_PromotionListV30FilteringStatusFirst,
        self::PROMOTION_STATUS_NOT_DELETE_PromotionListV30FilteringStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringStatusFirst', $value));
        }
        return (string) $value;
    }
}
