<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetsDetailReadV2DataListAuditStatus
{
    public const ASSETS_AUDIT_DENY_DpaAssetsDetailReadV2DataListAuditStatus = 'ASSETS_AUDIT_DENY';
    public const ASSETS_PENDING_AUDIT_DpaAssetsDetailReadV2DataListAuditStatus = 'ASSETS_PENDING_AUDIT';
    public const ASSETS_AUDIT_SUCCESS_DpaAssetsDetailReadV2DataListAuditStatus = 'ASSETS_AUDIT_SUCCESS';
    public const ASSETS_TO_SUBMIT_AUDIT_DpaAssetsDetailReadV2DataListAuditStatus = 'ASSETS_TO_SUBMIT_AUDIT';

    public const ALLOWED_VALUES = [
        self::ASSETS_AUDIT_DENY_DpaAssetsDetailReadV2DataListAuditStatus,
        self::ASSETS_PENDING_AUDIT_DpaAssetsDetailReadV2DataListAuditStatus,
        self::ASSETS_AUDIT_SUCCESS_DpaAssetsDetailReadV2DataListAuditStatus,
        self::ASSETS_TO_SUBMIT_AUDIT_DpaAssetsDetailReadV2DataListAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetsDetailReadV2DataListAuditStatus', $value));
        }
        return (string) $value;
    }
}
