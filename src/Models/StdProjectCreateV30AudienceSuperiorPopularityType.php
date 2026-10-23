<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceSuperiorPopularityType
{
    public const GAME_StdProjectCreateV30AudienceSuperiorPopularityType = 'GAME';
    public const NONE_StdProjectCreateV30AudienceSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_StdProjectCreateV30AudienceSuperiorPopularityType,
        self::NONE_StdProjectCreateV30AudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
