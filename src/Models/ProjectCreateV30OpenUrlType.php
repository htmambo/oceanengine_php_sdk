<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30OpenUrlType
{
    public const CUSTOM_ProjectCreateV30OpenUrlType = 'CUSTOM';
    public const DPA_ProjectCreateV30OpenUrlType = 'DPA';
    public const NONE_ProjectCreateV30OpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectCreateV30OpenUrlType,
        self::DPA_ProjectCreateV30OpenUrlType,
        self::NONE_ProjectCreateV30OpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30OpenUrlType', $value));
        }
        return (string) $value;
    }
}
