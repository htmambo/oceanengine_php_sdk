<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameConvertWindowUpdateV30AssetType
{
    public const BYTE_GAME_ToolsMicroGameConvertWindowUpdateV30AssetType = 'BYTE_GAME';

    public const ALLOWED_VALUES = [
        self::BYTE_GAME_ToolsMicroGameConvertWindowUpdateV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameConvertWindowUpdateV30AssetType', $value));
        }
        return (string) $value;
    }
}
