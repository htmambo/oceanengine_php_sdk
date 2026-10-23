<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceHarmonyOsv
{
    public const Enum_0_0_StdProjectListV30DataListAudienceHarmonyOsv = '0.0';
    public const Enum_5_0_StdProjectListV30DataListAudienceHarmonyOsv = '5.0';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_StdProjectListV30DataListAudienceHarmonyOsv,
        self::Enum_5_0_StdProjectListV30DataListAudienceHarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceHarmonyOsv', $value));
        }
        return (string) $value;
    }
}
