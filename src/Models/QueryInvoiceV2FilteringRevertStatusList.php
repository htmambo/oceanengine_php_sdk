<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceV2FilteringRevertStatusList
{
    public const Enum_1_QueryInvoiceV2FilteringRevertStatusList = 1;
    public const Enum_2_QueryInvoiceV2FilteringRevertStatusList = 2;
    public const Enum_3_QueryInvoiceV2FilteringRevertStatusList = 3;
    public const Enum_4_QueryInvoiceV2FilteringRevertStatusList = 4;

    public const ALLOWED_VALUES = [
        self::Enum_1_QueryInvoiceV2FilteringRevertStatusList,
        self::Enum_2_QueryInvoiceV2FilteringRevertStatusList,
        self::Enum_3_QueryInvoiceV2FilteringRevertStatusList,
        self::Enum_4_QueryInvoiceV2FilteringRevertStatusList,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceV2FilteringRevertStatusList', $value));
        }
        return (string) $value;
    }
}
