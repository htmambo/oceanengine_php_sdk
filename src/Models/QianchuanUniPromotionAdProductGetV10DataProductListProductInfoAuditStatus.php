<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus
{
    public const PASS_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus = 'PASS';
    public const REJECT_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus = 'REJECT';
    public const IN_PROGRESS_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus = 'IN_PROGRESS';
    public const NONE_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus = 'NONE';

    public const ALLOWED_VALUES = [
        self::PASS_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus,
        self::REJECT_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus,
        self::IN_PROGRESS_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus,
        self::NONE_QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdProductGetV10DataProductListProductInfoAuditStatus', $value));
        }
        return (string) $value;
    }
}
