<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductListV30AssetQueryScopePermissionScope
{
    public const ALL_DpaEbpClueProductListV30AssetQueryScopePermissionScope = 'All';
    public const AUTHED_DpaEbpClueProductListV30AssetQueryScopePermissionScope = 'Authed';
    public const MANAGED_DpaEbpClueProductListV30AssetQueryScopePermissionScope = 'Managed';

    public const ALLOWED_VALUES = [
        self::ALL_DpaEbpClueProductListV30AssetQueryScopePermissionScope,
        self::AUTHED_DpaEbpClueProductListV30AssetQueryScopePermissionScope,
        self::MANAGED_DpaEbpClueProductListV30AssetQueryScopePermissionScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductListV30AssetQueryScopePermissionScope', $value));
        }
        return (string) $value;
    }
}
