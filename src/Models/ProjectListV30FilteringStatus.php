<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringStatus
{
    public const PROJECT_STATUS_ALL_ProjectListV30FilteringStatus = 'PROJECT_STATUS_ALL';
    public const PROJECT_STATUS_BUDGET_EXCEED_ProjectListV30FilteringStatus = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_BUDGET_PRE_OFFLINE_BUDGET_ProjectListV30FilteringStatus = 'PROJECT_STATUS_BUDGET_PRE_OFFLINE_BUDGET';
    public const PROJECT_STATUS_DELETE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_DELETE';
    public const PROJECT_STATUS_DISABLE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_DISABLE';
    public const PROJECT_STATUS_DONE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_DONE';
    public const PROJECT_STATUS_ENABLE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_ENABLE';
    public const PROJECT_STATUS_NOT_DELETE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_NOT_DELETE';
    public const PROJECT_STATUS_NOT_START_ProjectListV30FilteringStatus = 'PROJECT_STATUS_NOT_START';
    public const PROJECT_STATUS_NO_SCHEDULE_ProjectListV30FilteringStatus = 'PROJECT_STATUS_NO_SCHEDULE';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_ALL_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_BUDGET_EXCEED_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_BUDGET_PRE_OFFLINE_BUDGET_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_DELETE_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_DISABLE_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_DONE_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_ENABLE_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_NOT_DELETE_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_NOT_START_ProjectListV30FilteringStatus,
        self::PROJECT_STATUS_NO_SCHEDULE_ProjectListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
