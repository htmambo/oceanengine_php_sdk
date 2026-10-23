<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringProjectStatusFirst
{
    public const PROJECT_STATUS_ALL_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_ALL';
    public const PROJECT_STATUS_DELETE_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_ENABLE';
    public const PROJECT_STATUS_NOT_DELETE_LocalProjectListV30FilteringProjectStatusFirst = 'PROJECT_STATUS_NOT_DELETE';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_ALL_LocalProjectListV30FilteringProjectStatusFirst,
        self::PROJECT_STATUS_DELETE_LocalProjectListV30FilteringProjectStatusFirst,
        self::PROJECT_STATUS_DISABLE_LocalProjectListV30FilteringProjectStatusFirst,
        self::PROJECT_STATUS_DONE_LocalProjectListV30FilteringProjectStatusFirst,
        self::PROJECT_STATUS_ENABLE_LocalProjectListV30FilteringProjectStatusFirst,
        self::PROJECT_STATUS_NOT_DELETE_LocalProjectListV30FilteringProjectStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringProjectStatusFirst', $value));
        }
        return (string) $value;
    }
}
