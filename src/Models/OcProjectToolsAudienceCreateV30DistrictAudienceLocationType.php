<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceCreateV30DistrictAudienceLocationType
{
    public const ALL_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType = 'ALL';
    public const CURRENT_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType = 'CURRENT';
    public const HOME_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType = 'HOME';
    public const TRAVEL_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType,
        self::CURRENT_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType,
        self::HOME_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType,
        self::TRAVEL_OcProjectToolsAudienceCreateV30DistrictAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceCreateV30DistrictAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
