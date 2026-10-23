<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType
{
    public const ALL_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType = 'ALL';
    public const CURRENT_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType = 'CURRENT';
    public const HOME_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType,
        self::CURRENT_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType,
        self::HOME_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType,
        self::TRAVEL_QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskCreateV10AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
