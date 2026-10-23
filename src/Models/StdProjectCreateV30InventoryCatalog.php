<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30InventoryCatalog
{
    public const MANUAL_StdProjectCreateV30InventoryCatalog = 'MANUAL';
    public const UNIVERSAL_SMART_StdProjectCreateV30InventoryCatalog = 'UNIVERSAL_SMART';

    public const ALLOWED_VALUES = [
        self::MANUAL_StdProjectCreateV30InventoryCatalog,
        self::UNIVERSAL_SMART_StdProjectCreateV30InventoryCatalog,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30InventoryCatalog', $value));
        }
        return (string) $value;
    }
}
