<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductListV30AccountType
{
    public const EBP_DpaEbpProductListV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::EBP_DpaEbpProductListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductListV30AccountType', $value));
        }
        return (string) $value;
    }
}
