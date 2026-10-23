<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesHideIfExists
{
    public const FILTER_AudiencePackageGetV30DataAudiencePackagesHideIfExists = 'FILTER';
    public const TARGETING_AudiencePackageGetV30DataAudiencePackagesHideIfExists = 'TARGETING';
    public const UNLIMITED_AudiencePackageGetV30DataAudiencePackagesHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_AudiencePackageGetV30DataAudiencePackagesHideIfExists,
        self::TARGETING_AudiencePackageGetV30DataAudiencePackagesHideIfExists,
        self::UNLIMITED_AudiencePackageGetV30DataAudiencePackagesHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesHideIfExists', $value));
        }
        return (string) $value;
    }
}
