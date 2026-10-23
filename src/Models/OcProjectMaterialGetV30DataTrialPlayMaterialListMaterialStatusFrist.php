<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist
{
    public const STATUS_DELETE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist = 'STATUS_DELETE';
    public const STATUS_DISABLE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist = 'STATUS_DISABLE';
    public const STATUS_FROZEN_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist = 'STATUS_FROZEN';
    public const STATUS_OK_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist = 'STATUS_OK';
    public const STATUS_TIME_DONE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist = 'STATUS_TIME_DONE';

    public const ALLOWED_VALUES = [
        self::STATUS_DELETE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist,
        self::STATUS_DISABLE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist,
        self::STATUS_FROZEN_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist,
        self::STATUS_OK_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist,
        self::STATUS_TIME_DONE_OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataTrialPlayMaterialListMaterialStatusFrist', $value));
        }
        return (string) $value;
    }
}
