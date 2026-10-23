<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorCreateV30AnchorInfoGameAnchorGameType
{
    public const GENERAL_NativeAnchorCreateV30AnchorInfoGameAnchorGameType = 'GENERAL';
    public const MICRO_GAME_NativeAnchorCreateV30AnchorInfoGameAnchorGameType = 'MICRO_GAME';

    public const ALLOWED_VALUES = [
        self::GENERAL_NativeAnchorCreateV30AnchorInfoGameAnchorGameType,
        self::MICRO_GAME_NativeAnchorCreateV30AnchorInfoGameAnchorGameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorCreateV30AnchorInfoGameAnchorGameType', $value));
        }
        return (string) $value;
    }
}
