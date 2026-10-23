<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListOpenUrlType
{
    public const CUSTOM_ProjectListV30DataListOpenUrlType = 'CUSTOM';
    public const DPA_ProjectListV30DataListOpenUrlType = 'DPA';
    public const NONE_ProjectListV30DataListOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectListV30DataListOpenUrlType,
        self::DPA_ProjectListV30DataListOpenUrlType,
        self::NONE_ProjectListV30DataListOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListOpenUrlType', $value));
        }
        return (string) $value;
    }
}
