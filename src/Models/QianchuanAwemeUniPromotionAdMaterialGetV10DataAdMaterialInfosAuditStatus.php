<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
{
    public const IN_PROGRESS_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'IN_PROGRESS';
    public const PASS_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'PASS';
    public const REJECT_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'REJECT';

    public const ALLOWED_VALUES = [
        self::IN_PROGRESS_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::PASS_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::REJECT_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus', $value));
        }
        return (string) $value;
    }
}
