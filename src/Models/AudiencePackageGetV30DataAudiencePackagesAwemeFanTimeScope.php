<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope
{
    public const FIFTEEN_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope = 'FIFTEEN_DAYS';
    public const SIXTY_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope = 'SIXTY_DAYS';
    public const THIRTY_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope = 'THIRTY_DAYS';

    public const ALLOWED_VALUES = [
        self::FIFTEEN_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope,
        self::SIXTY_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope,
        self::THIRTY_DAYS_AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAwemeFanTimeScope', $value));
        }
        return (string) $value;
    }
}
