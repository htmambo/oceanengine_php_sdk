<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceLocationType
{
    public const CURRENT_AdGetV2DataAudienceLocationType = 'CURRENT';
    public const TRAVEL_AdGetV2DataAudienceLocationType = 'TRAVEL';
    public const ALL_AdGetV2DataAudienceLocationType = 'ALL';
    public const HOME_AdGetV2DataAudienceLocationType = 'HOME';

    public const ALLOWED_VALUES = [
        self::CURRENT_AdGetV2DataAudienceLocationType,
        self::TRAVEL_AdGetV2DataAudienceLocationType,
        self::ALL_AdGetV2DataAudienceLocationType,
        self::HOME_AdGetV2DataAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
