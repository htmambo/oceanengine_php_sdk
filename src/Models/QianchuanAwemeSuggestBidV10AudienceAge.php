<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeSuggestBidV10AudienceAge
{
    public const AGE_BETWEEN_18_23_QianchuanAwemeSuggestBidV10AudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_QianchuanAwemeSuggestBidV10AudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_QianchuanAwemeSuggestBidV10AudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_50_QianchuanAwemeSuggestBidV10AudienceAge = 'AGE_BETWEEN_41_50';

    public const ALLOWED_VALUES = [
        self::AGE_BETWEEN_18_23_QianchuanAwemeSuggestBidV10AudienceAge,
        self::AGE_BETWEEN_24_30_QianchuanAwemeSuggestBidV10AudienceAge,
        self::AGE_BETWEEN_31_40_QianchuanAwemeSuggestBidV10AudienceAge,
        self::AGE_BETWEEN_41_50_QianchuanAwemeSuggestBidV10AudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeSuggestBidV10AudienceAge', $value));
        }
        return (string) $value;
    }
}
