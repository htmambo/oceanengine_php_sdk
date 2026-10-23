<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsToolsTaskDetailGetV30DataObjectListObjectStatus
{
    public const FAILED_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus = 'FAILED';
    public const RUNNING_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus = 'RUNNING';
    public const SUCCEED_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus = 'SUCCEED';

    public const ALLOWED_VALUES = [
        self::FAILED_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus,
        self::RUNNING_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus,
        self::SUCCEED_ToolsToolsTaskDetailGetV30DataObjectListObjectStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsToolsTaskDetailGetV30DataObjectListObjectStatus', $value));
        }
        return (string) $value;
    }
}
