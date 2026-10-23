<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListValueOptimizedType
{
    public const ACTION_ProjectListV30DataListValueOptimizedType = 'ACTION';
    public const OFF_ProjectListV30DataListValueOptimizedType = 'OFF';
    public const VALUE_ProjectListV30DataListValueOptimizedType = 'VALUE';

    public const ALLOWED_VALUES = [
        self::ACTION_ProjectListV30DataListValueOptimizedType,
        self::OFF_ProjectListV30DataListValueOptimizedType,
        self::VALUE_ProjectListV30DataListValueOptimizedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListValueOptimizedType', $value));
        }
        return (string) $value;
    }
}
