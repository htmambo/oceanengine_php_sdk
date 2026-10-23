<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceSuperiorPopularityType
{
    public const GAME_ProjectUpdateV30AudienceSuperiorPopularityType = 'GAME';
    public const NONE_ProjectUpdateV30AudienceSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_ProjectUpdateV30AudienceSuperiorPopularityType,
        self::NONE_ProjectUpdateV30AudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
