<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30FilteringMaterialStatusFirst
{
    public const ALL_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'ALL';
    public const ALL_EXCEPT_DELETE_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'ALL_EXCEPT_DELETE';
    public const STATUS_DELETE_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'STATUS_DELETE';
    public const STATUS_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'STATUS_DISABLE';
    public const STATUS_FROZEN_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'STATUS_FROZEN';
    public const STATUS_OK_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'STATUS_OK';
    public const STATUS_TIME_DONE_OcProjectMaterialGetV30FilteringMaterialStatusFirst = 'STATUS_TIME_DONE';

    public const ALLOWED_VALUES = [
        self::ALL_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::ALL_EXCEPT_DELETE_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::STATUS_DELETE_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::STATUS_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::STATUS_FROZEN_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::STATUS_OK_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
        self::STATUS_TIME_DONE_OcProjectMaterialGetV30FilteringMaterialStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30FilteringMaterialStatusFirst', $value));
        }
        return (string) $value;
    }
}
