<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus
{
    public const SUCCESS_QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus = 'SUCCESS';
    public const FAILED_QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus,
        self::FAILED_QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdRoi2GoalUpdateV10DataResultsStatus', $value));
        }
        return (string) $value;
    }
}
