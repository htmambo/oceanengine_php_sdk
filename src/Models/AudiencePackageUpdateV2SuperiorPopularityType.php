<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2SuperiorPopularityType
{
    public const NONE_AudiencePackageUpdateV2SuperiorPopularityType = 'NONE';
    public const GAME_AudiencePackageUpdateV2SuperiorPopularityType = 'GAME';

    public const ALLOWED_VALUES = [
        self::NONE_AudiencePackageUpdateV2SuperiorPopularityType,
        self::GAME_AudiencePackageUpdateV2SuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2SuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
