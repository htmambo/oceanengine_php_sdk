<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus
{
    public const SUCCESS_QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus = 'SUCCESS';
    public const FAILED_QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus,
        self::FAILED_QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdBudgetUpdateV10DataResultsStatus', $value));
        }
        return (string) $value;
    }
}
