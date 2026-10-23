<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListRevenueModelPoint
{
    public const IAAP_A_ToolsMicroGameListV30DataListRevenueModelPoint = 'IAAP_A';
    public const IAAP_P_ToolsMicroGameListV30DataListRevenueModelPoint = 'IAAP_P';

    public const ALLOWED_VALUES = [
        self::IAAP_A_ToolsMicroGameListV30DataListRevenueModelPoint,
        self::IAAP_P_ToolsMicroGameListV30DataListRevenueModelPoint,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListRevenueModelPoint', $value));
        }
        return (string) $value;
    }
}
