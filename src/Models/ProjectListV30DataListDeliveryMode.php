<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliveryMode
{
    public const MANUAL_ProjectListV30DataListDeliveryMode = 'MANUAL';
    public const PROCEDURAL_ProjectListV30DataListDeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_ProjectListV30DataListDeliveryMode,
        self::PROCEDURAL_ProjectListV30DataListDeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliveryMode', $value));
        }
        return (string) $value;
    }
}
