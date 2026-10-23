<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePlayableListV30DataMaterialsImageMode
{
    public const CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE_FilePlayableListV30DataMaterialsImageMode = 'CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE';
    public const IMAGE_MODE_INSTANT_PLAY_FilePlayableListV30DataMaterialsImageMode = 'IMAGE_MODE_INSTANT_PLAY';
    public const IMAGE_MODE_TRIAL_PLAY_VERTICAL_FilePlayableListV30DataMaterialsImageMode = 'IMAGE_MODE_TRIAL_PLAY_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE_FilePlayableListV30DataMaterialsImageMode,
        self::IMAGE_MODE_INSTANT_PLAY_FilePlayableListV30DataMaterialsImageMode,
        self::IMAGE_MODE_TRIAL_PLAY_VERTICAL_FilePlayableListV30DataMaterialsImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePlayableListV30DataMaterialsImageMode', $value));
        }
        return (string) $value;
    }
}
