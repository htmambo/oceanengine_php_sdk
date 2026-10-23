<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliveryMode
{
    public const MANUAL_ProjectCreateV30DeliveryMode = 'MANUAL';
    public const PROCEDURAL_ProjectCreateV30DeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_ProjectCreateV30DeliveryMode,
        self::PROCEDURAL_ProjectCreateV30DeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliveryMode', $value));
        }
        return (string) $value;
    }
}
