<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2DataListCouponNeedSmsVerify
{
    public const Enum_0_ClueCouponGetV2DataListCouponNeedSmsVerify = '0';
    public const Enum_1_ClueCouponGetV2DataListCouponNeedSmsVerify = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueCouponGetV2DataListCouponNeedSmsVerify,
        self::Enum_1_ClueCouponGetV2DataListCouponNeedSmsVerify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2DataListCouponNeedSmsVerify', $value));
        }
        return (string) $value;
    }
}
