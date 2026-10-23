<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceSuperiorPopularityType
{
    public const GAME_ProjectCreateV30AudienceSuperiorPopularityType = 'GAME';
    public const NONE_ProjectCreateV30AudienceSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_ProjectCreateV30AudienceSuperiorPopularityType,
        self::NONE_ProjectCreateV30AudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
