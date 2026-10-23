<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsExtremeMaterialLimitGetV30NotificationType
{
    public const LIMIT_ToolsExtremeMaterialLimitGetV30NotificationType = 'LIMIT';
    public const WARN_ToolsExtremeMaterialLimitGetV30NotificationType = 'WARN';

    public const ALLOWED_VALUES = [
        self::LIMIT_ToolsExtremeMaterialLimitGetV30NotificationType,
        self::WARN_ToolsExtremeMaterialLimitGetV30NotificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsExtremeMaterialLimitGetV30NotificationType', $value));
        }
        return (string) $value;
    }
}
