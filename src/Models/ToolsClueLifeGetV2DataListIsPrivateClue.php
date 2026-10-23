<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListIsPrivateClue
{
    public const NO_ToolsClueLifeGetV2DataListIsPrivateClue = 'NO';
    public const YES_ToolsClueLifeGetV2DataListIsPrivateClue = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_ToolsClueLifeGetV2DataListIsPrivateClue,
        self::YES_ToolsClueLifeGetV2DataListIsPrivateClue,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListIsPrivateClue', $value));
        }
        return (string) $value;
    }
}
