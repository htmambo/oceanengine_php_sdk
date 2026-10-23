<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLiteContactGetV2DataListCallDirection
{
    public const CALL_OUT_ToolsClueLiteContactGetV2DataListCallDirection = 'CALL_OUT';
    public const CALL_IN_ToolsClueLiteContactGetV2DataListCallDirection = 'CALL_IN';

    public const ALLOWED_VALUES = [
        self::CALL_OUT_ToolsClueLiteContactGetV2DataListCallDirection,
        self::CALL_IN_ToolsClueLiteContactGetV2DataListCallDirection,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLiteContactGetV2DataListCallDirection', $value));
        }
        return (string) $value;
    }
}
