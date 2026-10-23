<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceLocationType
{
    public const ALL_StdProjectListV30DataListAudienceLocationType = 'ALL';
    public const CURRENT_StdProjectListV30DataListAudienceLocationType = 'CURRENT';
    public const HOME_StdProjectListV30DataListAudienceLocationType = 'HOME';
    public const TRAVEL_StdProjectListV30DataListAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_StdProjectListV30DataListAudienceLocationType,
        self::CURRENT_StdProjectListV30DataListAudienceLocationType,
        self::HOME_StdProjectListV30DataListAudienceLocationType,
        self::TRAVEL_StdProjectListV30DataListAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
