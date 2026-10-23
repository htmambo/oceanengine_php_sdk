<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV30FilteringReceiptStatusList
{
    public const COMPLETED_QueryProjectV30FilteringReceiptStatusList = 'COMPLETED';
    public const PART_COMPLETED_QueryProjectV30FilteringReceiptStatusList = 'PART_COMPLETED';
    public const UNCOMPLETED_QueryProjectV30FilteringReceiptStatusList = 'UNCOMPLETED';

    public const ALLOWED_VALUES = [
        self::COMPLETED_QueryProjectV30FilteringReceiptStatusList,
        self::PART_COMPLETED_QueryProjectV30FilteringReceiptStatusList,
        self::UNCOMPLETED_QueryProjectV30FilteringReceiptStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV30FilteringReceiptStatusList', $value));
        }
        return (string) $value;
    }
}
