<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomAsyncTaskCreateV30DataTaskStatus
{
    public const ASYNC_TASK_STATUS_COMPLETED_ReportCustomAsyncTaskCreateV30DataTaskStatus = 'ASYNC_TASK_STATUS_COMPLETED';
    public const ASYNC_TASK_STATUS_CREATED_ReportCustomAsyncTaskCreateV30DataTaskStatus = 'ASYNC_TASK_STATUS_CREATED';
    public const ASYNC_TASK_STATUS_EXECUTING_ReportCustomAsyncTaskCreateV30DataTaskStatus = 'ASYNC_TASK_STATUS_EXECUTING';
    public const ASYNC_TASK_STATUS_FAILED_ReportCustomAsyncTaskCreateV30DataTaskStatus = 'ASYNC_TASK_STATUS_FAILED';

    public const ALLOWED_VALUES = [
        self::ASYNC_TASK_STATUS_COMPLETED_ReportCustomAsyncTaskCreateV30DataTaskStatus,
        self::ASYNC_TASK_STATUS_CREATED_ReportCustomAsyncTaskCreateV30DataTaskStatus,
        self::ASYNC_TASK_STATUS_EXECUTING_ReportCustomAsyncTaskCreateV30DataTaskStatus,
        self::ASYNC_TASK_STATUS_FAILED_ReportCustomAsyncTaskCreateV30DataTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomAsyncTaskCreateV30DataTaskStatus', $value));
        }
        return (string) $value;
    }
}
