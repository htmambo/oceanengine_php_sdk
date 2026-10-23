<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceSuperiorPopularityType
{
    public const GAME_ProjectListV30DataListAudienceSuperiorPopularityType = 'GAME';
    public const NONE_ProjectListV30DataListAudienceSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_ProjectListV30DataListAudienceSuperiorPopularityType,
        self::NONE_ProjectListV30DataListAudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
