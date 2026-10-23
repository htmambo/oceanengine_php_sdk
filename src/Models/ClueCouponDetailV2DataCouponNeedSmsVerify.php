<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataCouponNeedSmsVerify
{
    public const Enum_0_ClueCouponDetailV2DataCouponNeedSmsVerify = '0';
    public const Enum_1_ClueCouponDetailV2DataCouponNeedSmsVerify = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueCouponDetailV2DataCouponNeedSmsVerify,
        self::Enum_1_ClueCouponDetailV2DataCouponNeedSmsVerify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataCouponNeedSmsVerify', $value));
        }
        return (string) $value;
    }
}
