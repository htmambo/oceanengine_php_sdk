<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType
{
    public const ALL_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType = 'ALL';
    public const CURRENT_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType = 'CURRENT';
    public const HOME_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType,
        self::CURRENT_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType,
        self::HOME_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType,
        self::TRAVEL_QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskUpdateV10AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
