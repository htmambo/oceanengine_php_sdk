<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListProjectStatusSecond
{
    public const PROJECT_STATUS_BUDGET_EXCEED_LocalProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_DISABLE_LocalProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_NOT_SCHEDULE_LocalProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_STATUS_NOT_SCHEDULE';
    public const PROJECT_STATUS_NOT_START_LocalProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_STATUS_NOT_START';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_BUDGET_EXCEED_LocalProjectListV30DataProjectListProjectStatusSecond,
        self::PROJECT_STATUS_DISABLE_LocalProjectListV30DataProjectListProjectStatusSecond,
        self::PROJECT_STATUS_NOT_SCHEDULE_LocalProjectListV30DataProjectListProjectStatusSecond,
        self::PROJECT_STATUS_NOT_START_LocalProjectListV30DataProjectListProjectStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListProjectStatusSecond', $value));
        }
        return (string) $value;
    }
}
