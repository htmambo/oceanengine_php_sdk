<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectStatusUpdateV30DataOptStatus
{
    public const ENABLE_LocalProjectStatusUpdateV30DataOptStatus = 'ENABLE';
    public const PAUSED_LocalProjectStatusUpdateV30DataOptStatus = 'PAUSED';

    public const ALLOWED_VALUES = [
        self::ENABLE_LocalProjectStatusUpdateV30DataOptStatus,
        self::PAUSED_LocalProjectStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
