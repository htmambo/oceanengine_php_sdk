<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_INSTANT_PLAY_OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode = 'CREATIVE_IMAGE_MODE_INSTANT_PLAY';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_INSTANT_PLAY_OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataInstantPlayMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
