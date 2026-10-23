<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpLibraryListV30AssetQueryScopeHierarchy
{
    public const DIRECT_DpaEbpLibraryListV30AssetQueryScopeHierarchy = 'Direct';
    public const TRAVERSE_DpaEbpLibraryListV30AssetQueryScopeHierarchy = 'Traverse';

    public const ALLOWED_VALUES = [
        self::DIRECT_DpaEbpLibraryListV30AssetQueryScopeHierarchy,
        self::TRAVERSE_DpaEbpLibraryListV30AssetQueryScopeHierarchy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpLibraryListV30AssetQueryScopeHierarchy', $value));
        }
        return (string) $value;
    }
}
