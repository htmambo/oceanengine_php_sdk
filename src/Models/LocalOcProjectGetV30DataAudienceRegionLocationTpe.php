<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataAudienceRegionLocationTpe
{
    public const ALL_LocalOcProjectGetV30DataAudienceRegionLocationTpe = 'ALL';
    public const CURRENT_LocalOcProjectGetV30DataAudienceRegionLocationTpe = 'CURRENT';
    public const HOME_LocalOcProjectGetV30DataAudienceRegionLocationTpe = 'HOME';
    public const TRAVEL_LocalOcProjectGetV30DataAudienceRegionLocationTpe = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectGetV30DataAudienceRegionLocationTpe,
        self::CURRENT_LocalOcProjectGetV30DataAudienceRegionLocationTpe,
        self::HOME_LocalOcProjectGetV30DataAudienceRegionLocationTpe,
        self::TRAVEL_LocalOcProjectGetV30DataAudienceRegionLocationTpe,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataAudienceRegionLocationTpe', $value));
        }
        return (string) $value;
    }
}
