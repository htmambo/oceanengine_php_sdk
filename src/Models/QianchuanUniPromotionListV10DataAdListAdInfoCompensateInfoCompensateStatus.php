<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus
{
    public const IN_EFFECT_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'IN_EFFECT';
    public const INVALID_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'INVALID';
    public const CONFIRMING_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'CONFIRMING';
    public const PAID_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'PAID';
    public const ENDED_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'ENDED';
    public const DEFAULT_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::IN_EFFECT_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
        self::INVALID_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
        self::CONFIRMING_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
        self::PAID_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
        self::ENDED_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
        self::DEFAULT_QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus', $value));
        }
        return (string) $value;
    }
}
