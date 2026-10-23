<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountUpdateV30AccountsAccountType
{
    public const AD_EbpGroupBindAccountUpdateV30AccountsAccountType = 'AD';
    public const DOU_PLUS_EbpGroupBindAccountUpdateV30AccountsAccountType = 'DOU_PLUS';
    public const LOCAL_EbpGroupBindAccountUpdateV30AccountsAccountType = 'LOCAL';
    public const QIANCHUAN_EbpGroupBindAccountUpdateV30AccountsAccountType = 'QIANCHUAN';
    public const STAR_EbpGroupBindAccountUpdateV30AccountsAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_EbpGroupBindAccountUpdateV30AccountsAccountType,
        self::DOU_PLUS_EbpGroupBindAccountUpdateV30AccountsAccountType,
        self::LOCAL_EbpGroupBindAccountUpdateV30AccountsAccountType,
        self::QIANCHUAN_EbpGroupBindAccountUpdateV30AccountsAccountType,
        self::STAR_EbpGroupBindAccountUpdateV30AccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountUpdateV30AccountsAccountType', $value));
        }
        return (string) $value;
    }
}
