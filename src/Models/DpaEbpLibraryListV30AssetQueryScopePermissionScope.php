<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpLibraryListV30AssetQueryScopePermissionScope
{
    public const ALL_DpaEbpLibraryListV30AssetQueryScopePermissionScope = 'All';
    public const AUTHED_DpaEbpLibraryListV30AssetQueryScopePermissionScope = 'Authed';
    public const MANAGED_DpaEbpLibraryListV30AssetQueryScopePermissionScope = 'Managed';

    public const ALLOWED_VALUES = [
        self::ALL_DpaEbpLibraryListV30AssetQueryScopePermissionScope,
        self::AUTHED_DpaEbpLibraryListV30AssetQueryScopePermissionScope,
        self::MANAGED_DpaEbpLibraryListV30AssetQueryScopePermissionScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpLibraryListV30AssetQueryScopePermissionScope', $value));
        }
        return (string) $value;
    }
}
