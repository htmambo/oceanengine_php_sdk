<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpMetaGetV30AccountType
{
    public const EBP_DpaEbpMetaGetV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::EBP_DpaEbpMetaGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpMetaGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
