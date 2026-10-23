<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
{
    public const DEFAULT_STATUS_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'DEFAULT_STATUS';
    public const IN_EFFECT_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'IN_EFFECT';
    public const INVALID_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'INVALID';
    public const CONFIRMING_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'CONFIRMING';
    public const PAID_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'PAID';
    public const ENDED_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'ENDED';

    public const ALLOWED_VALUES = [
        self::DEFAULT_STATUS_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::IN_EFFECT_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::INVALID_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::CONFIRMING_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::PAID_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::ENDED_PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus', $value));
        }
        return (string) $value;
    }
}
