<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class GameplayListV30AssetType
{
    public const APP_GameplayListV30AssetType = 'APP';
    public const BYTE_GAME_GameplayListV30AssetType = 'BYTE_GAME';
    public const WECHAT_GAME_GameplayListV30AssetType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::APP_GameplayListV30AssetType,
        self::BYTE_GAME_GameplayListV30AssetType,
        self::WECHAT_GAME_GameplayListV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum GameplayListV30AssetType', $value));
        }
        return (string) $value;
    }
}
