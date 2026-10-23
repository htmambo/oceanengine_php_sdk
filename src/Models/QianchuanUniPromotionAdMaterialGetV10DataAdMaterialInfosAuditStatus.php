<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
{
    public const PASS_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'PASS';
    public const REJECT_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'REJECT';
    public const IN_PROGRESS_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'IN_PROGRESS';

    public const ALLOWED_VALUES = [
        self::PASS_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::REJECT_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::IN_PROGRESS_QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus', $value));
        }
        return (string) $value;
    }
}
