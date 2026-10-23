<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListGameAnchorGameType
{
    public const GENERAL_NativeAnchorGetDetailV30DataListGameAnchorGameType = 'GENERAL';
    public const MICRO_GAME_NativeAnchorGetDetailV30DataListGameAnchorGameType = 'MICRO_GAME';

    public const ALLOWED_VALUES = [
        self::GENERAL_NativeAnchorGetDetailV30DataListGameAnchorGameType,
        self::MICRO_GAME_NativeAnchorGetDetailV30DataListGameAnchorGameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListGameAnchorGameType', $value));
        }
        return (string) $value;
    }
}
