<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterAccountListV30FilterAccountType
{
    public const AD_CustomerCenterAccountListV30FilterAccountType = 'AD';
    public const LOCAL_CustomerCenterAccountListV30FilterAccountType = 'LOCAL';
    public const QIANCHUAN_CustomerCenterAccountListV30FilterAccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CustomerCenterAccountListV30FilterAccountType,
        self::LOCAL_CustomerCenterAccountListV30FilterAccountType,
        self::QIANCHUAN_CustomerCenterAccountListV30FilterAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterAccountListV30FilterAccountType', $value));
        }
        return (string) $value;
    }
}
