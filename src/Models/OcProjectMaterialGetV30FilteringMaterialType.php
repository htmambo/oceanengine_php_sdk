<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30FilteringMaterialType
{
    public const IMAGE_OcProjectMaterialGetV30FilteringMaterialType = 'IMAGE';
    public const VIDEO_OcProjectMaterialGetV30FilteringMaterialType = 'VIDEO';
    public const CAROUSEL_OcProjectMaterialGetV30FilteringMaterialType = 'CAROUSEL';
    public const TRIAL_PLAY_MATERIAL_OcProjectMaterialGetV30FilteringMaterialType = 'TRIAL_PLAY_MATERIAL';
    public const INSTANT_PLAY_MATERIAL_OcProjectMaterialGetV30FilteringMaterialType = 'INSTANT_PLAY_MATERIAL';
    public const OTHER_OcProjectMaterialGetV30FilteringMaterialType = 'OTHER';
    public const TITLE_OcProjectMaterialGetV30FilteringMaterialType = 'TITLE';
    public const MINI_PROGRAM_INFO_OcProjectMaterialGetV30FilteringMaterialType = 'MINI_PROGRAM_INFO';

    public const ALLOWED_VALUES = [
        self::IMAGE_OcProjectMaterialGetV30FilteringMaterialType,
        self::VIDEO_OcProjectMaterialGetV30FilteringMaterialType,
        self::CAROUSEL_OcProjectMaterialGetV30FilteringMaterialType,
        self::TRIAL_PLAY_MATERIAL_OcProjectMaterialGetV30FilteringMaterialType,
        self::INSTANT_PLAY_MATERIAL_OcProjectMaterialGetV30FilteringMaterialType,
        self::OTHER_OcProjectMaterialGetV30FilteringMaterialType,
        self::TITLE_OcProjectMaterialGetV30FilteringMaterialType,
        self::MINI_PROGRAM_INFO_OcProjectMaterialGetV30FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
