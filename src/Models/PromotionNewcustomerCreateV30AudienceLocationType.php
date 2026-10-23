<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30AudienceLocationType
{
    public const ALL_PromotionNewcustomerCreateV30AudienceLocationType = 'ALL';
    public const CURRENT_PromotionNewcustomerCreateV30AudienceLocationType = 'CURRENT';
    public const HOME_PromotionNewcustomerCreateV30AudienceLocationType = 'HOME';
    public const TRAVEL_PromotionNewcustomerCreateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_PromotionNewcustomerCreateV30AudienceLocationType,
        self::CURRENT_PromotionNewcustomerCreateV30AudienceLocationType,
        self::HOME_PromotionNewcustomerCreateV30AudienceLocationType,
        self::TRAVEL_PromotionNewcustomerCreateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
