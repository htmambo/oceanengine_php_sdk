<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2AwemeFanTimeScope
{
    public const THIRTY_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope = 'THIRTY_DAYS';
    public const SIXTY_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope = 'SIXTY_DAYS';
    public const FIFTEEN_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope = 'FIFTEEN_DAYS';

    public const ALLOWED_VALUES = [
        self::THIRTY_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope,
        self::SIXTY_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope,
        self::FIFTEEN_DAYS_AudiencePackageUpdateV2AwemeFanTimeScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2AwemeFanTimeScope', $value));
        }
        return (string) $value;
    }
}
