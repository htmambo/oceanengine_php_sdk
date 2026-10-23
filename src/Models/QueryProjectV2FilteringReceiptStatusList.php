<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV2FilteringReceiptStatusList
{
    public const COMPLETED_QueryProjectV2FilteringReceiptStatusList = 'COMPLETED';
    public const PART_COMPLETED_QueryProjectV2FilteringReceiptStatusList = 'PART_COMPLETED';
    public const UNCOMPLETED_QueryProjectV2FilteringReceiptStatusList = 'UNCOMPLETED';

    public const ALLOWED_VALUES = [
        self::COMPLETED_QueryProjectV2FilteringReceiptStatusList,
        self::PART_COMPLETED_QueryProjectV2FilteringReceiptStatusList,
        self::UNCOMPLETED_QueryProjectV2FilteringReceiptStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV2FilteringReceiptStatusList', $value));
        }
        return (string) $value;
    }
}
