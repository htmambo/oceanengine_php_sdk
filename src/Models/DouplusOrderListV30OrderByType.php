<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30OrderByType
{
    public const ASC_DouplusOrderListV30OrderByType = 'ASC';
    public const DESC_DouplusOrderListV30OrderByType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_DouplusOrderListV30OrderByType,
        self::DESC_DouplusOrderListV30OrderByType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30OrderByType', $value));
        }
        return (string) $value;
    }
}
