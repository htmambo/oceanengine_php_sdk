<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListProjectStatusFirst
{
    public const PROJECT_STATUS_DELETE_LocalProjectListV30DataProjectListProjectStatusFirst = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_LocalProjectListV30DataProjectListProjectStatusFirst = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_LocalProjectListV30DataProjectListProjectStatusFirst = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_LocalProjectListV30DataProjectListProjectStatusFirst = 'PROJECT_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_DELETE_LocalProjectListV30DataProjectListProjectStatusFirst,
        self::PROJECT_STATUS_DISABLE_LocalProjectListV30DataProjectListProjectStatusFirst,
        self::PROJECT_STATUS_DONE_LocalProjectListV30DataProjectListProjectStatusFirst,
        self::PROJECT_STATUS_ENABLE_LocalProjectListV30DataProjectListProjectStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListProjectStatusFirst', $value));
        }
        return (string) $value;
    }
}
