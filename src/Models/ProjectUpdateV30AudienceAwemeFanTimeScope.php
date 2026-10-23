<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceAwemeFanTimeScope
{
    public const FIFTEEN_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope = 'FIFTEEN_DAYS';
    public const SIXTY_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope = 'SIXTY_DAYS';
    public const THIRTY_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope = 'THIRTY_DAYS';

    public const ALLOWED_VALUES = [
        self::FIFTEEN_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope,
        self::SIXTY_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope,
        self::THIRTY_DAYS_ProjectUpdateV30AudienceAwemeFanTimeScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceAwemeFanTimeScope', $value));
        }
        return (string) $value;
    }
}
