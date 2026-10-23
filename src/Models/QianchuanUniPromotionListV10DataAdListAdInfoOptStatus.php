<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoOptStatus
{
    public const DELETE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus = 'DELETE';
    public const DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus = 'DISABLE';
    public const ENABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus = 'ENABLE';
    public const QUOTA_DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus = 'QUOTA_DISABLE';
    public const ROI2_DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus = 'ROI2_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus,
        self::DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus,
        self::ENABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus,
        self::QUOTA_DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus,
        self::ROI2_DISABLE_QianchuanUniPromotionListV10DataAdListAdInfoOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoOptStatus', $value));
        }
        return (string) $value;
    }
}
