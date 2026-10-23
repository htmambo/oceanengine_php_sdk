<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceSelfV2RevertStatusList
{
    public const Enum_1_QueryInvoiceSelfV2RevertStatusList = 1;
    public const Enum_2_QueryInvoiceSelfV2RevertStatusList = 2;
    public const Enum_3_QueryInvoiceSelfV2RevertStatusList = 3;
    public const Enum_4_QueryInvoiceSelfV2RevertStatusList = 4;

    public const ALLOWED_VALUES = [
        self::Enum_1_QueryInvoiceSelfV2RevertStatusList,
        self::Enum_2_QueryInvoiceSelfV2RevertStatusList,
        self::Enum_3_QueryInvoiceSelfV2RevertStatusList,
        self::Enum_4_QueryInvoiceSelfV2RevertStatusList,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceSelfV2RevertStatusList', $value));
        }
        return (string) $value;
    }
}
