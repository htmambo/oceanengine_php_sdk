<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListStatusFirst
{
    public const PROMOTION_STATUS_DELETED_PromotionListV30DataListStatusFirst = 'PROMOTION_STATUS_DELETED';
    public const PROMOTION_STATUS_DISABLE_PromotionListV30DataListStatusFirst = 'PROMOTION_STATUS_DISABLE';
    public const PROMOTION_STATUS_DONE_PromotionListV30DataListStatusFirst = 'PROMOTION_STATUS_DONE';
    public const PROMOTION_STATUS_ENABLE_PromotionListV30DataListStatusFirst = 'PROMOTION_STATUS_ENABLE';
    public const PROMOTION_STATUS_FROZEN_PromotionListV30DataListStatusFirst = 'PROMOTION_STATUS_FROZEN';

    public const ALLOWED_VALUES = [
        self::PROMOTION_STATUS_DELETED_PromotionListV30DataListStatusFirst,
        self::PROMOTION_STATUS_DISABLE_PromotionListV30DataListStatusFirst,
        self::PROMOTION_STATUS_DONE_PromotionListV30DataListStatusFirst,
        self::PROMOTION_STATUS_ENABLE_PromotionListV30DataListStatusFirst,
        self::PROMOTION_STATUS_FROZEN_PromotionListV30DataListStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListStatusFirst', $value));
        }
        return (string) $value;
    }
}
