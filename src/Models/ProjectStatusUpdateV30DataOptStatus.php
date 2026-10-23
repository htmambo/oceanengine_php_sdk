<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectStatusUpdateV30DataOptStatus
{
    public const DISABLE_ProjectStatusUpdateV30DataOptStatus = 'DISABLE';
    public const ENABLE_ProjectStatusUpdateV30DataOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_ProjectStatusUpdateV30DataOptStatus,
        self::ENABLE_ProjectStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
