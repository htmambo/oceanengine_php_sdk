<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceLocationType
{
    public const ALL_QianchuanToolsEstimateAudienceV10AudienceLocationType = 'ALL';
    public const CURRENT_QianchuanToolsEstimateAudienceV10AudienceLocationType = 'CURRENT';
    public const HOME_QianchuanToolsEstimateAudienceV10AudienceLocationType = 'HOME';
    public const TRAVEL_QianchuanToolsEstimateAudienceV10AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanToolsEstimateAudienceV10AudienceLocationType,
        self::CURRENT_QianchuanToolsEstimateAudienceV10AudienceLocationType,
        self::HOME_QianchuanToolsEstimateAudienceV10AudienceLocationType,
        self::TRAVEL_QianchuanToolsEstimateAudienceV10AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
