<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
{
    public const CONFIRMING_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'CONFIRMING';
    public const DEFAULT_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'DEFAULT';
    public const ENDED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'ENDED';
    public const INVALID_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'INVALID';
    public const IN_EFFECT_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'IN_EFFECT';
    public const PAID_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'PAID';
    public const UNSUPPORTED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus = 'UNSUPPORTED';

    public const ALLOWED_VALUES = [
        self::CONFIRMING_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::DEFAULT_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::ENDED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::INVALID_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::IN_EFFECT_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::PAID_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
        self::UNSUPPORTED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus', $value));
        }
        return (string) $value;
    }
}
