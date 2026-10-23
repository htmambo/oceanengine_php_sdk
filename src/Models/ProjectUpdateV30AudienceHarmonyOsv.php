<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceHarmonyOsv
{
    public const Enum_0_0_ProjectUpdateV30AudienceHarmonyOsv = '0.0';
    public const Enum_5_0_ProjectUpdateV30AudienceHarmonyOsv = '5.0';
    public const NONE_ProjectUpdateV30AudienceHarmonyOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_ProjectUpdateV30AudienceHarmonyOsv,
        self::Enum_5_0_ProjectUpdateV30AudienceHarmonyOsv,
        self::NONE_ProjectUpdateV30AudienceHarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceHarmonyOsv', $value));
        }
        return (string) $value;
    }
}
