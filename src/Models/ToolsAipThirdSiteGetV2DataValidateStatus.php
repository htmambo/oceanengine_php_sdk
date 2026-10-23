<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAipThirdSiteGetV2DataValidateStatus
{
    public const VALIDATE_SUCCESS_ToolsAipThirdSiteGetV2DataValidateStatus = 'VALIDATE_SUCCESS';
    public const VALIDATE_FAIL_ToolsAipThirdSiteGetV2DataValidateStatus = 'VALIDATE_FAIL';
    public const HIGH_RISK_INDUSTRY_VALIDATE_FAIL_ToolsAipThirdSiteGetV2DataValidateStatus = 'HIGH_RISK_INDUSTRY_VALIDATE_FAIL';
    public const UN_VALIDATE_ToolsAipThirdSiteGetV2DataValidateStatus = 'UN_VALIDATE';
    public const PUBLISH_ToolsAipThirdSiteGetV2DataValidateStatus = 'PUBLISH';

    public const ALLOWED_VALUES = [
        self::VALIDATE_SUCCESS_ToolsAipThirdSiteGetV2DataValidateStatus,
        self::VALIDATE_FAIL_ToolsAipThirdSiteGetV2DataValidateStatus,
        self::HIGH_RISK_INDUSTRY_VALIDATE_FAIL_ToolsAipThirdSiteGetV2DataValidateStatus,
        self::UN_VALIDATE_ToolsAipThirdSiteGetV2DataValidateStatus,
        self::PUBLISH_ToolsAipThirdSiteGetV2DataValidateStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAipThirdSiteGetV2DataValidateStatus', $value));
        }
        return (string) $value;
    }
}
