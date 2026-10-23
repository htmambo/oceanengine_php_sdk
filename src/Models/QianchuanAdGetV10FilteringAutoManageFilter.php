<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10FilteringAutoManageFilter
{
    public const ALL_QianchuanAdGetV10FilteringAutoManageFilter = 'ALL';
    public const AUTO_MANAGE_QianchuanAdGetV10FilteringAutoManageFilter = 'AUTO_MANAGE';
    public const NORMAL_QianchuanAdGetV10FilteringAutoManageFilter = 'NORMAL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdGetV10FilteringAutoManageFilter,
        self::AUTO_MANAGE_QianchuanAdGetV10FilteringAutoManageFilter,
        self::NORMAL_QianchuanAdGetV10FilteringAutoManageFilter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10FilteringAutoManageFilter', $value));
        }
        return (string) $value;
    }
}
