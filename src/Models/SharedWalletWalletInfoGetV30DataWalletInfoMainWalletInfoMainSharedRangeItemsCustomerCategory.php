<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory
{
    public const AGENT_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'AGENT';
    public const DIRECT_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'DIRECT';
    public const PARTNER_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'PARTNER';
    public const SELF_SERVICE_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'SELF_SERVICE';
    public const SVIP_CUSTOMER_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'SVIP_CUSTOMER';
    public const VIRTUAL_CUS_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory = 'VIRTUAL_CUS';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
        self::DIRECT_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
        self::PARTNER_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
        self::SELF_SERVICE_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
        self::SVIP_CUSTOMER_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
        self::VIRTUAL_CUS_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsCustomerCategory', $value));
        }
        return (string) $value;
    }
}
