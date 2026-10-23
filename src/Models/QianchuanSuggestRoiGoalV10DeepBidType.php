<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanSuggestRoiGoalV10DeepBidType
{
    public const COMM_ROI_QianchuanSuggestRoiGoalV10DeepBidType = 'COMM_ROI';
    public const MIN_QianchuanSuggestRoiGoalV10DeepBidType = 'MIN';
    public const PAY_ROI_QianchuanSuggestRoiGoalV10DeepBidType = 'PAY_ROI';

    public const ALLOWED_VALUES = [
        self::COMM_ROI_QianchuanSuggestRoiGoalV10DeepBidType,
        self::MIN_QianchuanSuggestRoiGoalV10DeepBidType,
        self::PAY_ROI_QianchuanSuggestRoiGoalV10DeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanSuggestRoiGoalV10DeepBidType', $value));
        }
        return (string) $value;
    }
}
