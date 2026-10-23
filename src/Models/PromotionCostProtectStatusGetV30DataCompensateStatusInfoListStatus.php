<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus
{
    public const SUCCESS_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus = 'SUCCESS';
    public const FAILED_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus,
        self::FAILED_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCostProtectStatusGetV30DataCompensateStatusInfoListStatus', $value));
        }
        return (string) $value;
    }
}
