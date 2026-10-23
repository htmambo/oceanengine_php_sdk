<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive
{
    public const OFF_AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive = 'OFF';
    public const ON_AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive,
        self::ON_AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
