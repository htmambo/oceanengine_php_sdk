<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge
{
    public const AGE_ABOVE_50_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_18_23_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge = 'AGE_BETWEEN_41_49';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge,
        self::AGE_BETWEEN_18_23_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge,
        self::AGE_BETWEEN_24_30_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge,
        self::AGE_BETWEEN_31_40_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge,
        self::AGE_BETWEEN_41_49_QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskUpdateV10AudienceAge', $value));
        }
        return (string) $value;
    }
}
