<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType
{
    public const ALL_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType = 'ALL';
    public const CURRENT_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType = 'CURRENT';
    public const HOME_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType = 'HOME';
    public const TRAVEL_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType,
        self::CURRENT_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType,
        self::HOME_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType,
        self::TRAVEL_OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceUpdateV30DistrictAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
