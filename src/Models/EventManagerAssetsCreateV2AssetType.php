<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAssetsCreateV2AssetType
{
    public const APP_EventManagerAssetsCreateV2AssetType = 'APP';
    public const TETRIS_EXTERNAL_EventManagerAssetsCreateV2AssetType = 'TETRIS_EXTERNAL';
    public const THIRD_EXTERNAL_EventManagerAssetsCreateV2AssetType = 'THIRD_EXTERNAL';
    public const MINI_PROGRAME_EventManagerAssetsCreateV2AssetType = 'MINI_PROGRAME';
    public const OFFLINE_EVENT_EventManagerAssetsCreateV2AssetType = 'OFFLINE_EVENT';
    public const OTHER_EventManagerAssetsCreateV2AssetType = 'OTHER';
    public const QUICK_APP_EventManagerAssetsCreateV2AssetType = 'QUICK_APP';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerAssetsCreateV2AssetType,
        self::TETRIS_EXTERNAL_EventManagerAssetsCreateV2AssetType,
        self::THIRD_EXTERNAL_EventManagerAssetsCreateV2AssetType,
        self::MINI_PROGRAME_EventManagerAssetsCreateV2AssetType,
        self::OFFLINE_EVENT_EventManagerAssetsCreateV2AssetType,
        self::OTHER_EventManagerAssetsCreateV2AssetType,
        self::QUICK_APP_EventManagerAssetsCreateV2AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAssetsCreateV2AssetType', $value));
        }
        return (string) $value;
    }
}
