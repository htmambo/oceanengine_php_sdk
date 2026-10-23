<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanSuggestRoiGoalV10DeepExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanSuggestRoiGoalV10DeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PAY_ROI';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanSuggestRoiGoalV10DeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanSuggestRoiGoalV10DeepExternalAction', $value));
        }
        return (string) $value;
    }
}
