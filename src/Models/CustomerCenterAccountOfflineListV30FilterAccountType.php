<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterAccountOfflineListV30FilterAccountType
{
    public const QIANCHUAN_CustomerCenterAccountOfflineListV30FilterAccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::QIANCHUAN_CustomerCenterAccountOfflineListV30FilterAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterAccountOfflineListV30FilterAccountType', $value));
        }
        return (string) $value;
    }
}
