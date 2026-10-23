<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus
{
    public const DELETED_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'DELETED';
    public const DISABLE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'DISABLE';
    public const FROZEN_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'LIVE_ROOM_OFF';
    public const OFFLINE_BALANCE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'OFFLINE_BUDGET';
    public const OFFLINE_TIME_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'OFFLINE_TIME';
    public const PROCESSING_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'PROCESSING';
    public const ROI2_DISABLE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus = 'ROI2_DISABLE';

    public const ALLOWED_VALUES = [
        self::DELETED_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::DISABLE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::FROZEN_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::LIVE_ROOM_OFF_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::OFFLINE_BALANCE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::OFFLINE_BUDGET_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::OFFLINE_TIME_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::PROCESSING_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
        self::ROI2_DISABLE_QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus', $value));
        }
        return (string) $value;
    }
}
