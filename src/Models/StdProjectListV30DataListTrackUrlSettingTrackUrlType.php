<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListTrackUrlSettingTrackUrlType
{
    public const CUSTOM_StdProjectListV30DataListTrackUrlSettingTrackUrlType = 'CUSTOM';
    public const GROUP_ID_StdProjectListV30DataListTrackUrlSettingTrackUrlType = 'GROUP_ID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectListV30DataListTrackUrlSettingTrackUrlType,
        self::GROUP_ID_StdProjectListV30DataListTrackUrlSettingTrackUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListTrackUrlSettingTrackUrlType', $value));
        }
        return (string) $value;
    }
}
