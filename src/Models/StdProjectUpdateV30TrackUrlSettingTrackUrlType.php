<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30TrackUrlSettingTrackUrlType
{
    public const CUSTOM_StdProjectUpdateV30TrackUrlSettingTrackUrlType = 'CUSTOM';
    public const GROUP_ID_StdProjectUpdateV30TrackUrlSettingTrackUrlType = 'GROUP_ID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectUpdateV30TrackUrlSettingTrackUrlType,
        self::GROUP_ID_StdProjectUpdateV30TrackUrlSettingTrackUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30TrackUrlSettingTrackUrlType', $value));
        }
        return (string) $value;
    }
}
