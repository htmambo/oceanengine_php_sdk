<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAge
{
    public const AGE_ABOVE_50_QianchuanAdDetailGetV10DataAudienceAge = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_18_23_QianchuanAdDetailGetV10DataAudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_QianchuanAdDetailGetV10DataAudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_QianchuanAdDetailGetV10DataAudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_QianchuanAdDetailGetV10DataAudienceAge = 'AGE_BETWEEN_41_49';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_QianchuanAdDetailGetV10DataAudienceAge,
        self::AGE_BETWEEN_18_23_QianchuanAdDetailGetV10DataAudienceAge,
        self::AGE_BETWEEN_24_30_QianchuanAdDetailGetV10DataAudienceAge,
        self::AGE_BETWEEN_31_40_QianchuanAdDetailGetV10DataAudienceAge,
        self::AGE_BETWEEN_41_49_QianchuanAdDetailGetV10DataAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAge', $value));
        }
        return (string) $value;
    }
}
