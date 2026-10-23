<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30TrackUrlSettingTrackUrlType
{
    public const CUSTOM_ProjectCreateV30TrackUrlSettingTrackUrlType = 'CUSTOM';
    public const GROUP_ID_ProjectCreateV30TrackUrlSettingTrackUrlType = 'GROUP_ID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectCreateV30TrackUrlSettingTrackUrlType,
        self::GROUP_ID_ProjectCreateV30TrackUrlSettingTrackUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30TrackUrlSettingTrackUrlType', $value));
        }
        return (string) $value;
    }
}
