<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListOptStatus
{
    public const DISABLE_PromotionListV30DataListOptStatus = 'DISABLE';
    public const DISABLE_BY_QUOTA_PromotionListV30DataListOptStatus = 'DISABLE_BY_QUOTA';
    public const ENABLE_PromotionListV30DataListOptStatus = 'ENABLE';
    public const FROZEN_PromotionListV30DataListOptStatus = 'FROZEN';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionListV30DataListOptStatus,
        self::DISABLE_BY_QUOTA_PromotionListV30DataListOptStatus,
        self::ENABLE_PromotionListV30DataListOptStatus,
        self::FROZEN_PromotionListV30DataListOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListOptStatus', $value));
        }
        return (string) $value;
    }
}
