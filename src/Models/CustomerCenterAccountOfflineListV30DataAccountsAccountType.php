<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterAccountOfflineListV30DataAccountsAccountType
{
    public const AD_CustomerCenterAccountOfflineListV30DataAccountsAccountType = 'AD';
    public const BP_CustomerCenterAccountOfflineListV30DataAccountsAccountType = 'BP';
    public const LOCAL_CustomerCenterAccountOfflineListV30DataAccountsAccountType = 'LOCAL';
    public const QIANCHUAN_CustomerCenterAccountOfflineListV30DataAccountsAccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CustomerCenterAccountOfflineListV30DataAccountsAccountType,
        self::BP_CustomerCenterAccountOfflineListV30DataAccountsAccountType,
        self::LOCAL_CustomerCenterAccountOfflineListV30DataAccountsAccountType,
        self::QIANCHUAN_CustomerCenterAccountOfflineListV30DataAccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterAccountOfflineListV30DataAccountsAccountType', $value));
        }
        return (string) $value;
    }
}
