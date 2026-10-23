<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus
{
    public const FAILED_QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus = 'FAILED';
    public const SUCCESS_QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus,
        self::SUCCESS_QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdScheduleDateUpdateV10DataResultsStatus', $value));
        }
        return (string) $value;
    }
}
