<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist
{
    public const STATUS_DELETE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist = 'STATUS_DELETE';
    public const STATUS_DISABLE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist = 'STATUS_DISABLE';
    public const STATUS_FROZEN_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist = 'STATUS_FROZEN';
    public const STATUS_OK_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist = 'STATUS_OK';
    public const STATUS_TIME_DONE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist = 'STATUS_TIME_DONE';

    public const ALLOWED_VALUES = [
        self::STATUS_DELETE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist,
        self::STATUS_DISABLE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist,
        self::STATUS_FROZEN_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist,
        self::STATUS_OK_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist,
        self::STATUS_TIME_DONE_OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataImageMaterialListMaterialStatusFrist', $value));
        }
        return (string) $value;
    }
}
