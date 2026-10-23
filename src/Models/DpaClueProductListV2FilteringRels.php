<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductListV2FilteringRels
{
    public const REL_COP_DpaClueProductListV2FilteringRels = 'REL_COP';
    public const REL_OWN_DpaClueProductListV2FilteringRels = 'REL_OWN';

    public const ALLOWED_VALUES = [
        self::REL_COP_DpaClueProductListV2FilteringRels,
        self::REL_OWN_DpaClueProductListV2FilteringRels,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductListV2FilteringRels', $value));
        }
        return (string) $value;
    }
}
