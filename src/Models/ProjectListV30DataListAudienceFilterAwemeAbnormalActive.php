<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceFilterAwemeAbnormalActive
{
    public const OFF_ProjectListV30DataListAudienceFilterAwemeAbnormalActive = 'OFF';
    public const ON_ProjectListV30DataListAudienceFilterAwemeAbnormalActive = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListAudienceFilterAwemeAbnormalActive,
        self::ON_ProjectListV30DataListAudienceFilterAwemeAbnormalActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceFilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
