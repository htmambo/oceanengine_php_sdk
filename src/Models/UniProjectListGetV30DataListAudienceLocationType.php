<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudienceLocationType
{
    public const ALL_UniProjectListGetV30DataListAudienceLocationType = 'ALL';
    public const CURRENT_UniProjectListGetV30DataListAudienceLocationType = 'CURRENT';
    public const HOME_UniProjectListGetV30DataListAudienceLocationType = 'HOME';
    public const TRAVEL_UniProjectListGetV30DataListAudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_UniProjectListGetV30DataListAudienceLocationType,
        self::CURRENT_UniProjectListGetV30DataListAudienceLocationType,
        self::HOME_UniProjectListGetV30DataListAudienceLocationType,
        self::TRAVEL_UniProjectListGetV30DataListAudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudienceLocationType', $value));
        }
        return (string) $value;
    }
}
