<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceFilterOwnAwemeFans
{
    public const OFF_ProjectUpdateV30AudienceFilterOwnAwemeFans = 'OFF';
    public const ON_ProjectUpdateV30AudienceFilterOwnAwemeFans = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectUpdateV30AudienceFilterOwnAwemeFans,
        self::ON_ProjectUpdateV30AudienceFilterOwnAwemeFans,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceFilterOwnAwemeFans', $value));
        }
        return (string) $value;
    }
}
