<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsToolsTaskGetV30DataTaskListTaskStatus
{
    public const APPENDING_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'APPENDING';
    public const CANCELED_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'CANCELED';
    public const DONE_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'DONE';
    public const FAILED_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'FAILED';
    public const PENDING_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'PENDING';
    public const RUNNING_ToolsToolsTaskGetV30DataTaskListTaskStatus = 'RUNNING';

    public const ALLOWED_VALUES = [
        self::APPENDING_ToolsToolsTaskGetV30DataTaskListTaskStatus,
        self::CANCELED_ToolsToolsTaskGetV30DataTaskListTaskStatus,
        self::DONE_ToolsToolsTaskGetV30DataTaskListTaskStatus,
        self::FAILED_ToolsToolsTaskGetV30DataTaskListTaskStatus,
        self::PENDING_ToolsToolsTaskGetV30DataTaskListTaskStatus,
        self::RUNNING_ToolsToolsTaskGetV30DataTaskListTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsToolsTaskGetV30DataTaskListTaskStatus', $value));
        }
        return (string) $value;
    }
}
