<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceHarmonyOsv
{
    public const Enum_5_0_ProjectListV30DataListAudienceHarmonyOsv = '5.0';
    public const NONE_ProjectListV30DataListAudienceHarmonyOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_5_0_ProjectListV30DataListAudienceHarmonyOsv,
        self::NONE_ProjectListV30DataListAudienceHarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceHarmonyOsv', $value));
        }
        return (string) $value;
    }
}
