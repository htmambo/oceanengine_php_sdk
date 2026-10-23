<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoGameAnchorGameType
{
    public const GENERAL_NativeAnchorUpdateV30AnchorInfoGameAnchorGameType = 'GENERAL';
    public const MICRO_GAME_NativeAnchorUpdateV30AnchorInfoGameAnchorGameType = 'MICRO_GAME';

    public const ALLOWED_VALUES = [
        self::GENERAL_NativeAnchorUpdateV30AnchorInfoGameAnchorGameType,
        self::MICRO_GAME_NativeAnchorUpdateV30AnchorInfoGameAnchorGameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoGameAnchorGameType', $value));
        }
        return (string) $value;
    }
}
