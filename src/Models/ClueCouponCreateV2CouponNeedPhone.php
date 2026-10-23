<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCreateV2CouponNeedPhone
{
    public const Enum_0_ClueCouponCreateV2CouponNeedPhone = '0';
    public const Enum_1_ClueCouponCreateV2CouponNeedPhone = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueCouponCreateV2CouponNeedPhone,
        self::Enum_1_ClueCouponCreateV2CouponNeedPhone,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCreateV2CouponNeedPhone', $value));
        }
        return (string) $value;
    }
}
