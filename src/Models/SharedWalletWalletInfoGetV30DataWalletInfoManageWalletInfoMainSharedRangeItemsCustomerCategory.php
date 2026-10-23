<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory
{
    public const AGENT_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'AGENT';
    public const DIRECT_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'DIRECT';
    public const PARTNER_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'PARTNER';
    public const SELF_SERVICE_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'SELF_SERVICE';
    public const SVIP_CUSTOMER_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'SVIP_CUSTOMER';
    public const VIRTUAL_CUS_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory = 'VIRTUAL_CUS';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
        self::DIRECT_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
        self::PARTNER_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
        self::SELF_SERVICE_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
        self::SVIP_CUSTOMER_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
        self::VIRTUAL_CUS_SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoManageWalletInfoMainSharedRangeItemsCustomerCategory', $value));
        }
        return (string) $value;
    }
}
