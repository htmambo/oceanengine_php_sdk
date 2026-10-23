<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge
{
    public const AGE_ABOVE_50_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_18_23_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge = 'AGE_BETWEEN_41_49';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge,
        self::AGE_BETWEEN_18_23_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge,
        self::AGE_BETWEEN_24_30_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge,
        self::AGE_BETWEEN_31_40_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge,
        self::AGE_BETWEEN_41_49_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAge', $value));
        }
        return (string) $value;
    }
}
