<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetV2ListV2DataAssetListAuditStatus
{
    public const REVIEW_FAIL_DpaAssetV2ListV2DataAssetListAuditStatus = 'REVIEW_FAIL';
    public const REVIEW_SUCCESS_DpaAssetV2ListV2DataAssetListAuditStatus = 'REVIEW_SUCCESS';
    public const UNDER_REVIEW_DpaAssetV2ListV2DataAssetListAuditStatus = 'UNDER_REVIEW';
    public const UNREVIEWED_DpaAssetV2ListV2DataAssetListAuditStatus = 'UNREVIEWED';

    public const ALLOWED_VALUES = [
        self::REVIEW_FAIL_DpaAssetV2ListV2DataAssetListAuditStatus,
        self::REVIEW_SUCCESS_DpaAssetV2ListV2DataAssetListAuditStatus,
        self::UNDER_REVIEW_DpaAssetV2ListV2DataAssetListAuditStatus,
        self::UNREVIEWED_DpaAssetV2ListV2DataAssetListAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetV2ListV2DataAssetListAuditStatus', $value));
        }
        return (string) $value;
    }
}
