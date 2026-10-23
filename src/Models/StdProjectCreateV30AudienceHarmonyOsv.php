<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceHarmonyOsv
{
    public const Enum_0_0_StdProjectCreateV30AudienceHarmonyOsv = '0.0';
    public const Enum_5_0_StdProjectCreateV30AudienceHarmonyOsv = '5.0';
    public const NONE_StdProjectCreateV30AudienceHarmonyOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_StdProjectCreateV30AudienceHarmonyOsv,
        self::Enum_5_0_StdProjectCreateV30AudienceHarmonyOsv,
        self::NONE_StdProjectCreateV30AudienceHarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceHarmonyOsv', $value));
        }
        return (string) $value;
    }
}
