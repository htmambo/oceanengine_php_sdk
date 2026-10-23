<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PAY_ROI';
    public const AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI_QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI_QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdRoi2GoalUpdateV10UpdateRoi2InfosDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
