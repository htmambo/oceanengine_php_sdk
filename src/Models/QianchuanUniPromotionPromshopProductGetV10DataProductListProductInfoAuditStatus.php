<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus
{
    public const PASS_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus = 'PASS';
    public const REJECT_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus = 'REJECT';
    public const IN_PROGRESS_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus = 'IN_PROGRESS';
    public const NONE_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus = 'NONE';

    public const ALLOWED_VALUES = [
        self::PASS_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus,
        self::REJECT_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus,
        self::IN_PROGRESS_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus,
        self::NONE_QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionPromshopProductGetV10DataProductListProductInfoAuditStatus', $value));
        }
        return (string) $value;
    }
}
