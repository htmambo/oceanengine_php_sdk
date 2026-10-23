<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE_OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode = 'CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE';
    public const CREATIVE_IMAGE_MODE_TRIAL_PLAY_VERTICAL_OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode = 'CREATIVE_IMAGE_MODE_TRIAL_PLAY_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_TRIAL_PLAY_LARGE_OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_TRIAL_PLAY_VERTICAL_OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataTrialPlayMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
