<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30OrderByField
{
    public const CREATE_TIME_DouplusOrderListV30OrderByField = 'CREATE_TIME';
    public const ORDER_ID_DouplusOrderListV30OrderByField = 'ORDER_ID';

    public const ALLOWED_VALUES = [
        self::CREATE_TIME_DouplusOrderListV30OrderByField,
        self::ORDER_ID_DouplusOrderListV30OrderByField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30OrderByField', $value));
        }
        return (string) $value;
    }
}
