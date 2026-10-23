<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AccountFundGetV30AccountType
{
    public const AD_AccountFundGetV30AccountType = 'AD';
    public const STAR_AccountFundGetV30AccountType = 'STAR';
    public const LOCAL_AccountFundGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_AccountFundGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_AccountFundGetV30AccountType,
        self::STAR_AccountFundGetV30AccountType,
        self::LOCAL_AccountFundGetV30AccountType,
        self::QIANCHUAN_AccountFundGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AccountFundGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
