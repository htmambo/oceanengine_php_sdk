<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCreateV2CouponResourceListUseType
{
    public const OFFLINE_ClueCouponCreateV2CouponResourceListUseType = 'OFFLINE';
    public const LINK_ClueCouponCreateV2CouponResourceListUseType = 'LINK';

    public const ALLOWED_VALUES = [
        self::OFFLINE_ClueCouponCreateV2CouponResourceListUseType,
        self::LINK_ClueCouponCreateV2CouponResourceListUseType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCreateV2CouponResourceListUseType', $value));
        }
        return (string) $value;
    }
}
