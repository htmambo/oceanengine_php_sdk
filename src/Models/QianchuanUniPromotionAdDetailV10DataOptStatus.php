<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataOptStatus
{
    public const DELETE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'DELETE';
    public const DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'DISABLE';
    public const ENABLE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'ENABLE';
    public const QUOTA_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'QUOTA_DISABLE';
    public const ROI2_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus = 'SYSTEM_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanUniPromotionAdDetailV10DataOptStatus,
        self::DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus,
        self::ENABLE_QianchuanUniPromotionAdDetailV10DataOptStatus,
        self::QUOTA_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus,
        self::ROI2_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus,
        self::SYSTEM_DISABLE_QianchuanUniPromotionAdDetailV10DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataOptStatus', $value));
        }
        return (string) $value;
    }
}
