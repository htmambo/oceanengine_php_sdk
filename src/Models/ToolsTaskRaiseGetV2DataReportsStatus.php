<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseGetV2DataReportsStatus
{
    public const RAISING_ToolsTaskRaiseGetV2DataReportsStatus = 'RAISING';
    public const STOP_ToolsTaskRaiseGetV2DataReportsStatus = 'STOP';

    public const ALLOWED_VALUES = [
        self::RAISING_ToolsTaskRaiseGetV2DataReportsStatus,
        self::STOP_ToolsTaskRaiseGetV2DataReportsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseGetV2DataReportsStatus', $value));
        }
        return (string) $value;
    }
}
