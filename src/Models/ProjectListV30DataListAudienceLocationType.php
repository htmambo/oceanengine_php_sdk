<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceLocationType
{
    public const ALL_ProjectListV30DataListAudienceLocationType = 'ALL';
    public const CURRENT_ProjectListV30DataListAudienceLocationType = 'CURRENT';
    public const HOME_ProjectListV30DataListAudienceLocationType = 'HOME';
    public const TRAVEL_ProjectListV30DataListAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_ProjectListV30DataListAudienceLocationType,
        self::CURRENT_ProjectListV30DataListAudienceLocationType,
        self::HOME_ProjectListV30DataListAudienceLocationType,
        self::TRAVEL_ProjectListV30DataListAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
