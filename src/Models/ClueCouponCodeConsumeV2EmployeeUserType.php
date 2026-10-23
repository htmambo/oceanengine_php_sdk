<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCodeConsumeV2EmployeeUserType
{
    public const TOUTIAO_ClueCouponCodeConsumeV2EmployeeUserType = 'TOUTIAO';
    public const DOUYIN_ClueCouponCodeConsumeV2EmployeeUserType = 'DOUYIN';

    public const ALLOWED_VALUES = [
        self::TOUTIAO_ClueCouponCodeConsumeV2EmployeeUserType,
        self::DOUYIN_ClueCouponCodeConsumeV2EmployeeUserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCodeConsumeV2EmployeeUserType', $value));
        }
        return (string) $value;
    }
}
