<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductListV30AssetQueryScopeHierarchy
{
    public const DIRECT_DpaEbpClueProductListV30AssetQueryScopeHierarchy = 'Direct';
    public const TRAVERSE_DpaEbpClueProductListV30AssetQueryScopeHierarchy = 'Traverse';

    public const ALLOWED_VALUES = [
        self::DIRECT_DpaEbpClueProductListV30AssetQueryScopeHierarchy,
        self::TRAVERSE_DpaEbpClueProductListV30AssetQueryScopeHierarchy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductListV30AssetQueryScopeHierarchy', $value));
        }
        return (string) $value;
    }
}
