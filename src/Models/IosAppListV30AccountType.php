<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30AccountType
{
    public const AD_IosAppListV30AccountType = 'AD';
    public const EBP_IosAppListV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AD_IosAppListV30AccountType,
        self::EBP_IosAppListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30AccountType', $value));
        }
        return (string) $value;
    }
}
