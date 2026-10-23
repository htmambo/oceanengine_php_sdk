<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountCreateV30AccountsAccountType
{
    public const AD_EbpGroupBindAccountCreateV30AccountsAccountType = 'AD';
    public const DOU_PLUS_EbpGroupBindAccountCreateV30AccountsAccountType = 'DOU_PLUS';
    public const LOCAL_EbpGroupBindAccountCreateV30AccountsAccountType = 'LOCAL';
    public const QIANCHUAN_EbpGroupBindAccountCreateV30AccountsAccountType = 'QIANCHUAN';
    public const STAR_EbpGroupBindAccountCreateV30AccountsAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_EbpGroupBindAccountCreateV30AccountsAccountType,
        self::DOU_PLUS_EbpGroupBindAccountCreateV30AccountsAccountType,
        self::LOCAL_EbpGroupBindAccountCreateV30AccountsAccountType,
        self::QIANCHUAN_EbpGroupBindAccountCreateV30AccountsAccountType,
        self::STAR_EbpGroupBindAccountCreateV30AccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountCreateV30AccountsAccountType', $value));
        }
        return (string) $value;
    }
}
