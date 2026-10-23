<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType
{
    public const LIMIT_ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType = 'LIMIT';
    public const WARN_ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType = 'WARN';

    public const ALLOWED_VALUES = [
        self::LIMIT_ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType,
        self::WARN_ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType', $value));
        }
        return (string) $value;
    }
}
