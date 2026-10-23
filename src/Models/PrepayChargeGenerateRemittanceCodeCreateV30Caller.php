<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateRemittanceCodeCreateV30Caller
{
    public const MAPI_PrepayChargeGenerateRemittanceCodeCreateV30Caller = 'MAPI';

    public const ALLOWED_VALUES = [
        self::MAPI_PrepayChargeGenerateRemittanceCodeCreateV30Caller,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateRemittanceCodeCreateV30Caller', $value));
        }
        return (string) $value;
    }
}
