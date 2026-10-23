<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAdType
{
    public const ALL_AudiencePackageGetV30DataAudiencePackagesAdType = 'ALL';
    public const SEARCH_AudiencePackageGetV30DataAudiencePackagesAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_AudiencePackageGetV30DataAudiencePackagesAdType,
        self::SEARCH_AudiencePackageGetV30DataAudiencePackagesAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAdType', $value));
        }
        return (string) $value;
    }
}
