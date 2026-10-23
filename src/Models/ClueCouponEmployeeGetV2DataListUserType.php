<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponEmployeeGetV2DataListUserType
{
    public const TOUTIAO_ClueCouponEmployeeGetV2DataListUserType = 'TOUTIAO';
    public const DOUYIN_ClueCouponEmployeeGetV2DataListUserType = 'DOUYIN';

    public const ALLOWED_VALUES = [
        self::TOUTIAO_ClueCouponEmployeeGetV2DataListUserType,
        self::DOUYIN_ClueCouponEmployeeGetV2DataListUserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponEmployeeGetV2DataListUserType', $value));
        }
        return (string) $value;
    }
}
