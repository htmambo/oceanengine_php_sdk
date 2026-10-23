<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAwemeFanTimeScope
{
    public const THIRTY_DAYS_AdGetV2DataAudienceAwemeFanTimeScope = 'THIRTY_DAYS';
    public const SIXTY_DAYS_AdGetV2DataAudienceAwemeFanTimeScope = 'SIXTY_DAYS';
    public const FIFTEEN_DAYS_AdGetV2DataAudienceAwemeFanTimeScope = 'FIFTEEN_DAYS';

    public const ALLOWED_VALUES = [
        self::THIRTY_DAYS_AdGetV2DataAudienceAwemeFanTimeScope,
        self::SIXTY_DAYS_AdGetV2DataAudienceAwemeFanTimeScope,
        self::FIFTEEN_DAYS_AdGetV2DataAudienceAwemeFanTimeScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAwemeFanTimeScope', $value));
        }
        return (string) $value;
    }
}
