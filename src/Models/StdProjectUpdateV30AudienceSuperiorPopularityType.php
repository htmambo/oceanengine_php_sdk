<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceSuperiorPopularityType
{
    public const GAME_StdProjectUpdateV30AudienceSuperiorPopularityType = 'GAME';
    public const NONE_StdProjectUpdateV30AudienceSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_StdProjectUpdateV30AudienceSuperiorPopularityType,
        self::NONE_StdProjectUpdateV30AudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
