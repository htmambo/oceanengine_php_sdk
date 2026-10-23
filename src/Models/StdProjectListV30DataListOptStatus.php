<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListOptStatus
{
    public const DISABLE_StdProjectListV30DataListOptStatus = 'DISABLE';
    public const ENABLE_StdProjectListV30DataListOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_StdProjectListV30DataListOptStatus,
        self::ENABLE_StdProjectListV30DataListOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListOptStatus', $value));
        }
        return (string) $value;
    }
}
