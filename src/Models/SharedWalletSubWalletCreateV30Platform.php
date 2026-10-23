<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletSubWalletCreateV30Platform
{
    public const SVIP_EBP_SharedWalletSubWalletCreateV30Platform = 'SVIP_EBP';

    public const ALLOWED_VALUES = [
        self::SVIP_EBP_SharedWalletSubWalletCreateV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletSubWalletCreateV30Platform', $value));
        }
        return (string) $value;
    }
}
