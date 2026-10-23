<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataSceneInventory
{
    public const VIDEO_SCENE_AdGetV2DataSceneInventory = 'VIDEO_SCENE';
    public const NOT_SELECT_AdGetV2DataSceneInventory = 'NOT_SELECT';
    public const TAIL_SCENE_AdGetV2DataSceneInventory = 'TAIL_SCENE';
    public const FEED_SCENE_AdGetV2DataSceneInventory = 'FEED_SCENE';

    public const ALLOWED_VALUES = [
        self::VIDEO_SCENE_AdGetV2DataSceneInventory,
        self::NOT_SELECT_AdGetV2DataSceneInventory,
        self::TAIL_SCENE_AdGetV2DataSceneInventory,
        self::FEED_SCENE_AdGetV2DataSceneInventory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataSceneInventory', $value));
        }
        return (string) $value;
    }
}
