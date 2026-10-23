<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType
{
    public const GAME_AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType = 'GAME';
    public const NONE_AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType = 'NONE';

    public const ALLOWED_VALUES = [
        self::GAME_AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType,
        self::NONE_AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
