<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListGender
{
    public const UNKNOWN_ToolsClueLifeGetV2DataListGender = 'UNKNOWN';
    public const MALE_ToolsClueLifeGetV2DataListGender = 'MALE';
    public const FEMALE_ToolsClueLifeGetV2DataListGender = 'FEMALE';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_ToolsClueLifeGetV2DataListGender,
        self::MALE_ToolsClueLifeGetV2DataListGender,
        self::FEMALE_ToolsClueLifeGetV2DataListGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListGender', $value));
        }
        return (string) $value;
    }
}
