<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType
{
    public const ALL_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType = 'ALL';
    public const CURRENT_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType = 'CURRENT';
    public const HOME_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType = 'HOME';
    public const TRAVEL_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType,
        self::CURRENT_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType,
        self::HOME_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType,
        self::TRAVEL_OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListDistrictAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
