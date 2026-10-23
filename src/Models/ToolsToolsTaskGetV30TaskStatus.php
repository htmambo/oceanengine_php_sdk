<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsToolsTaskGetV30TaskStatus
{
    public const APPENDING_ToolsToolsTaskGetV30TaskStatus = 'APPENDING';
    public const CANCELED_ToolsToolsTaskGetV30TaskStatus = 'CANCELED';
    public const DONE_ToolsToolsTaskGetV30TaskStatus = 'DONE';
    public const FAILED_ToolsToolsTaskGetV30TaskStatus = 'FAILED';
    public const PENDING_ToolsToolsTaskGetV30TaskStatus = 'PENDING';
    public const RUNNING_ToolsToolsTaskGetV30TaskStatus = 'RUNNING';

    public const ALLOWED_VALUES = [
        self::APPENDING_ToolsToolsTaskGetV30TaskStatus,
        self::CANCELED_ToolsToolsTaskGetV30TaskStatus,
        self::DONE_ToolsToolsTaskGetV30TaskStatus,
        self::FAILED_ToolsToolsTaskGetV30TaskStatus,
        self::PENDING_ToolsToolsTaskGetV30TaskStatus,
        self::RUNNING_ToolsToolsTaskGetV30TaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsToolsTaskGetV30TaskStatus', $value));
        }
        return (string) $value;
    }
}
