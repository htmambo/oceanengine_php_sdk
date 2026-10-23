<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesSmartExtend
{
    public const OFF_AudiencePackageGetV30DataAudiencePackagesSmartExtend = 'OFF';
    public const ON_AudiencePackageGetV30DataAudiencePackagesSmartExtend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageGetV30DataAudiencePackagesSmartExtend,
        self::ON_AudiencePackageGetV30DataAudiencePackagesSmartExtend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesSmartExtend', $value));
        }
        return (string) $value;
    }
}
