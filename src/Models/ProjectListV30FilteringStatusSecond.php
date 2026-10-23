<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringStatusSecond
{
    public const PROJECT_STATUS_BUDGET_EXCEED_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_BUDGET_GROUP_OFFLINE_BUDGET_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_BUDGET_GROUP_OFFLINE_BUDGET';
    public const PROJECT_STATUS_NOT_START_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_NOT_START';
    public const PROJECT_STATUS_NO_SCHEDULE_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_NO_SCHEDULE';
    public const PROJECT_STATUS_REACH_DAILY_DELIVERY_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_REACH_DAILY_DELIVERY';
    public const PROJECT_STATUS_STOP_ProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_STOP';

    public const ALLOWED_VALUES = [
        self::PROJECT_STATUS_BUDGET_EXCEED_ProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_BUDGET_GROUP_OFFLINE_BUDGET_ProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_NOT_START_ProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_NO_SCHEDULE_ProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_REACH_DAILY_DELIVERY_ProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_STOP_ProjectListV30FilteringStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringStatusSecond', $value));
        }
        return (string) $value;
    }
}
