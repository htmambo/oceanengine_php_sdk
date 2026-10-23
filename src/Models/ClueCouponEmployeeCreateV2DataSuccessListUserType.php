<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponEmployeeCreateV2DataSuccessListUserType
{
    public const TOUTIAO_ClueCouponEmployeeCreateV2DataSuccessListUserType = 'TOUTIAO';
    public const DOUYIN_ClueCouponEmployeeCreateV2DataSuccessListUserType = 'DOUYIN';

    public const ALLOWED_VALUES = [
        self::TOUTIAO_ClueCouponEmployeeCreateV2DataSuccessListUserType,
        self::DOUYIN_ClueCouponEmployeeCreateV2DataSuccessListUserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponEmployeeCreateV2DataSuccessListUserType', $value));
        }
        return (string) $value;
    }
}
