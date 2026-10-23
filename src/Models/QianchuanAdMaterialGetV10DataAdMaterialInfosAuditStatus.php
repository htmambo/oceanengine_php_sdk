<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus
{
    public const PASS_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'PASS';
    public const REJECT_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'REJECT';
    public const IN_PROGRESS_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus = 'IN_PROGRESS';

    public const ALLOWED_VALUES = [
        self::PASS_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::REJECT_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus,
        self::IN_PROGRESS_QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosAuditStatus', $value));
        }
        return (string) $value;
    }
}
