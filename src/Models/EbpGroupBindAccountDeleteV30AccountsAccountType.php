<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountDeleteV30AccountsAccountType
{
    public const AD_EbpGroupBindAccountDeleteV30AccountsAccountType = 'AD';
    public const DOU_PLUS_EbpGroupBindAccountDeleteV30AccountsAccountType = 'DOU_PLUS';
    public const LOCAL_EbpGroupBindAccountDeleteV30AccountsAccountType = 'LOCAL';
    public const QIANCHUAN_EbpGroupBindAccountDeleteV30AccountsAccountType = 'QIANCHUAN';
    public const STAR_EbpGroupBindAccountDeleteV30AccountsAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_EbpGroupBindAccountDeleteV30AccountsAccountType,
        self::DOU_PLUS_EbpGroupBindAccountDeleteV30AccountsAccountType,
        self::LOCAL_EbpGroupBindAccountDeleteV30AccountsAccountType,
        self::QIANCHUAN_EbpGroupBindAccountDeleteV30AccountsAccountType,
        self::STAR_EbpGroupBindAccountDeleteV30AccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountDeleteV30AccountsAccountType', $value));
        }
        return (string) $value;
    }
}
