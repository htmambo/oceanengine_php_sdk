<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids
{
    public const OFF_LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids = 'OFF';
    public const ON_LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids,
        self::ON_LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListPoiInfoAutoUpdatePoids', $value));
        }
        return (string) $value;
    }
}
