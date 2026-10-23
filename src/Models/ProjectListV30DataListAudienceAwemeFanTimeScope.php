<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceAwemeFanTimeScope
{
    public const FIFTEEN_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope = 'FIFTEEN_DAYS';
    public const SIXTY_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope = 'SIXTY_DAYS';
    public const THIRTY_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope = 'THIRTY_DAYS';

    public const ALLOWED_VALUES = [
        self::FIFTEEN_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope,
        self::SIXTY_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope,
        self::THIRTY_DAYS_ProjectListV30DataListAudienceAwemeFanTimeScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceAwemeFanTimeScope', $value));
        }
        return (string) $value;
    }
}
