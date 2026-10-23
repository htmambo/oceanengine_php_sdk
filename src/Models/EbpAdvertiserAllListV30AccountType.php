<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserAllListV30AccountType
{
    public const AD_EbpAdvertiserAllListV30AccountType = 'AD';
    public const LOCAL_EbpAdvertiserAllListV30AccountType = 'LOCAL';
    public const QIANCHUAN_EbpAdvertiserAllListV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_EbpAdvertiserAllListV30AccountType,
        self::LOCAL_EbpAdvertiserAllListV30AccountType,
        self::QIANCHUAN_EbpAdvertiserAllListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserAllListV30AccountType', $value));
        }
        return (string) $value;
    }
}
