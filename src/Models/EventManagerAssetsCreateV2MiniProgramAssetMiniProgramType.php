<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType
{
    public const BYTE_APP_EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType = 'BYTE_APP';
    public const BYTE_GAME_EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType = 'BYTE_GAME';

    public const ALLOWED_VALUES = [
        self::BYTE_APP_EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType,
        self::BYTE_GAME_EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAssetsCreateV2MiniProgramAssetMiniProgramType', $value));
        }
        return (string) $value;
    }
}
