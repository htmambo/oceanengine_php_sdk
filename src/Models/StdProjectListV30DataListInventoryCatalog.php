<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListInventoryCatalog
{
    public const MANUAL_StdProjectListV30DataListInventoryCatalog = 'MANUAL';
    public const UNIVERSAL_SMART_StdProjectListV30DataListInventoryCatalog = 'UNIVERSAL_SMART';

    public const ALLOWED_VALUES = [
        self::MANUAL_StdProjectListV30DataListInventoryCatalog,
        self::UNIVERSAL_SMART_StdProjectListV30DataListInventoryCatalog,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListInventoryCatalog', $value));
        }
        return (string) $value;
    }
}
