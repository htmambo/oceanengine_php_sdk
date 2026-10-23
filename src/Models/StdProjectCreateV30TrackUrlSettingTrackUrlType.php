<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30TrackUrlSettingTrackUrlType
{
    public const CUSTOM_StdProjectCreateV30TrackUrlSettingTrackUrlType = 'CUSTOM';
    public const GROUP_ID_StdProjectCreateV30TrackUrlSettingTrackUrlType = 'GROUP_ID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30TrackUrlSettingTrackUrlType,
        self::GROUP_ID_StdProjectCreateV30TrackUrlSettingTrackUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30TrackUrlSettingTrackUrlType', $value));
        }
        return (string) $value;
    }
}
