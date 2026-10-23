<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesCarrier
{
    public const MOBILE_AudiencePackageGetV30DataAudiencePackagesCarrier = 'MOBILE';
    public const TELCOM_AudiencePackageGetV30DataAudiencePackagesCarrier = 'TELCOM';
    public const UNICOM_AudiencePackageGetV30DataAudiencePackagesCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_AudiencePackageGetV30DataAudiencePackagesCarrier,
        self::TELCOM_AudiencePackageGetV30DataAudiencePackagesCarrier,
        self::UNICOM_AudiencePackageGetV30DataAudiencePackagesCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesCarrier', $value));
        }
        return (string) $value;
    }
}
