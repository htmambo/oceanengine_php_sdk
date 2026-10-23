<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponEmployeeCreateV2DataExistedListUserType
{
    public const TOUTIAO_ClueCouponEmployeeCreateV2DataExistedListUserType = 'TOUTIAO';
    public const DOUYIN_ClueCouponEmployeeCreateV2DataExistedListUserType = 'DOUYIN';

    public const ALLOWED_VALUES = [
        self::TOUTIAO_ClueCouponEmployeeCreateV2DataExistedListUserType,
        self::DOUYIN_ClueCouponEmployeeCreateV2DataExistedListUserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponEmployeeCreateV2DataExistedListUserType', $value));
        }
        return (string) $value;
    }
}
