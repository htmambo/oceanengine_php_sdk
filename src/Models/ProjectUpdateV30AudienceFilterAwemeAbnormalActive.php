<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceFilterAwemeAbnormalActive
{
    public const OFF_ProjectUpdateV30AudienceFilterAwemeAbnormalActive = 'OFF';
    public const ON_ProjectUpdateV30AudienceFilterAwemeAbnormalActive = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectUpdateV30AudienceFilterAwemeAbnormalActive,
        self::ON_ProjectUpdateV30AudienceFilterAwemeAbnormalActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceFilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
