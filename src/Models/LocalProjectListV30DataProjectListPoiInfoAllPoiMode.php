<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListPoiInfoAllPoiMode
{
    public const ALL_LocalProjectListV30DataProjectListPoiInfoAllPoiMode = 'ALL';
    public const PART_LocalProjectListV30DataProjectListPoiInfoAllPoiMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectListV30DataProjectListPoiInfoAllPoiMode,
        self::PART_LocalProjectListV30DataProjectListPoiInfoAllPoiMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListPoiInfoAllPoiMode', $value));
        }
        return (string) $value;
    }
}
