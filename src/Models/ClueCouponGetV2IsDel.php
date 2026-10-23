<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2IsDel
{
    public const Enum_0_ClueCouponGetV2IsDel = '0';
    public const Enum_1_ClueCouponGetV2IsDel = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueCouponGetV2IsDel,
        self::Enum_1_ClueCouponGetV2IsDel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2IsDel', $value));
        }
        return (string) $value;
    }
}
