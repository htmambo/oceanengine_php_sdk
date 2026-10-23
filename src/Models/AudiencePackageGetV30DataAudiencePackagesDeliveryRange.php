<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesDeliveryRange
{
    public const DEFAULT_AudiencePackageGetV30DataAudiencePackagesDeliveryRange = 'DEFAULT';
    public const UNION_AudiencePackageGetV30DataAudiencePackagesDeliveryRange = 'UNION';
    public const UNIVERSAL_AudiencePackageGetV30DataAudiencePackagesDeliveryRange = 'UNIVERSAL';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AudiencePackageGetV30DataAudiencePackagesDeliveryRange,
        self::UNION_AudiencePackageGetV30DataAudiencePackagesDeliveryRange,
        self::UNIVERSAL_AudiencePackageGetV30DataAudiencePackagesDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesDeliveryRange', $value));
        }
        return (string) $value;
    }
}
