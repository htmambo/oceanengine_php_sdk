<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois
{
    public const OFF_LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois = 'OFF';
    public const ON_LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois,
        self::ON_LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListPoiInfoAutoUpdatePois', $value));
        }
        return (string) $value;
    }
}
