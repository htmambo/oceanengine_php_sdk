<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus
{
    public const SUCCESS_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus = 'SUCCESS';
    public const FAILED_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus,
        self::FAILED_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus', $value));
        }
        return (string) $value;
    }
}
