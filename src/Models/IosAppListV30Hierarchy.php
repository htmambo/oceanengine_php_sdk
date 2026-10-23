<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30Hierarchy
{
    public const DIRECT_IosAppListV30Hierarchy = 'DIRECT';
    public const TRAVERSE_IosAppListV30Hierarchy = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_IosAppListV30Hierarchy,
        self::TRAVERSE_IosAppListV30Hierarchy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30Hierarchy', $value));
        }
        return (string) $value;
    }
}
