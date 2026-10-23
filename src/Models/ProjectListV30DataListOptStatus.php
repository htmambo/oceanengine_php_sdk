<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListOptStatus
{
    public const DISABLE_ProjectListV30DataListOptStatus = 'DISABLE';
    public const ENABLE_ProjectListV30DataListOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_ProjectListV30DataListOptStatus,
        self::ENABLE_ProjectListV30DataListOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListOptStatus', $value));
        }
        return (string) $value;
    }
}
