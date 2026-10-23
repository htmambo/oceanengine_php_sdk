<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus
{
    public const DELETED_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'DELETED';
    public const DISABLE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'DISABLE';
    public const FROZEN_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'FROZEN';
    public const OFFLINE_BALANCE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'OFFLINE_BUDGET';
    public const OFFLINE_TIME_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'OFFLINE_TIME';
    public const PROCESSING_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'PROCESSING';
    public const ROI2_DISABLE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus = 'ROI2_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETED_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::DISABLE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::FROZEN_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::OFFLINE_BALANCE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::OFFLINE_BUDGET_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::OFFLINE_TIME_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::PROCESSING_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
        self::ROI2_DISABLE_QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus', $value));
        }
        return (string) $value;
    }
}
