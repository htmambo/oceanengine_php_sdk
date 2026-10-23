<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataFormEnableLayer
{
    public const Enum_0_ClueCouponDetailV2DataFormEnableLayer = '0';
    public const Enum_1_ClueCouponDetailV2DataFormEnableLayer = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueCouponDetailV2DataFormEnableLayer,
        self::Enum_1_ClueCouponDetailV2DataFormEnableLayer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataFormEnableLayer', $value));
        }
        return (string) $value;
    }
}
