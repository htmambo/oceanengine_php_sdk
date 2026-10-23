<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class GameplayListV30DataPlayInfosPlayTypes
{
    public const DEMO_PLAY_GameplayListV30DataPlayInfosPlayTypes = 'DemoPlay';
    public const DIRECT_PLAY_GameplayListV30DataPlayInfosPlayTypes = 'DirectPlay';
    public const DOUBLE_MAIN_LINE_GameplayListV30DataPlayInfosPlayTypes = 'DoubleMainLine';
    public const THOUSAND_FACES_GameplayListV30DataPlayInfosPlayTypes = 'ThousandFaces';

    public const ALLOWED_VALUES = [
        self::DEMO_PLAY_GameplayListV30DataPlayInfosPlayTypes,
        self::DIRECT_PLAY_GameplayListV30DataPlayInfosPlayTypes,
        self::DOUBLE_MAIN_LINE_GameplayListV30DataPlayInfosPlayTypes,
        self::THOUSAND_FACES_GameplayListV30DataPlayInfosPlayTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum GameplayListV30DataPlayInfosPlayTypes', $value));
        }
        return (string) $value;
    }
}
