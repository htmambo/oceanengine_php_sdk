<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListSubStatus
{
    public const AWEME_REVOKE_REQUEST_ToolsAwemeAuthListV2DataListSubStatus = 'AWEME_REVOKE_REQUEST';
    public const CONFIRM_REVOKE_REQUEST_ToolsAwemeAuthListV2DataListSubStatus = 'CONFIRM_REVOKE_REQUEST';
    public const ENTERPRISE_AUTH_RELEASE_ToolsAwemeAuthListV2DataListSubStatus = 'ENTERPRISE_AUTH_RELEASE';
    public const INVALID_CANCEL_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_CANCEL';
    public const INVALID_EXPIRED_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_EXPIRED';
    public const INVALID_FAILED_BY_AWEME_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_FAILED_BY_AWEME';
    public const INVALID_PROCESS_TIME_OUT_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_PROCESS_TIME_OUT';
    public const INVALID_REJECT_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_REJECT';
    public const INVALID_TIME_OUT_ToolsAwemeAuthListV2DataListSubStatus = 'INVALID_TIME_OUT';
    public const RENEWING_ToolsAwemeAuthListV2DataListSubStatus = 'RENEWING';
    public const RENEW_FAIL_ToolsAwemeAuthListV2DataListSubStatus = 'RENEW_FAIL';
    public const RENEW_FAILED_BY_AWEME_ToolsAwemeAuthListV2DataListSubStatus = 'RENEW_FAILED_BY_AWEME';
    public const RENEW_SUCCESS_ToolsAwemeAuthListV2DataListSubStatus = 'RENEW_SUCCESS';
    public const UNQUALIFIED_AUTO_RELEASE_ToolsAwemeAuthListV2DataListSubStatus = 'UNQUALIFIED_AUTO_RELEASE';

    public const ALLOWED_VALUES = [
        self::AWEME_REVOKE_REQUEST_ToolsAwemeAuthListV2DataListSubStatus,
        self::CONFIRM_REVOKE_REQUEST_ToolsAwemeAuthListV2DataListSubStatus,
        self::ENTERPRISE_AUTH_RELEASE_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_CANCEL_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_EXPIRED_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_FAILED_BY_AWEME_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_PROCESS_TIME_OUT_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_REJECT_ToolsAwemeAuthListV2DataListSubStatus,
        self::INVALID_TIME_OUT_ToolsAwemeAuthListV2DataListSubStatus,
        self::RENEWING_ToolsAwemeAuthListV2DataListSubStatus,
        self::RENEW_FAIL_ToolsAwemeAuthListV2DataListSubStatus,
        self::RENEW_FAILED_BY_AWEME_ToolsAwemeAuthListV2DataListSubStatus,
        self::RENEW_SUCCESS_ToolsAwemeAuthListV2DataListSubStatus,
        self::UNQUALIFIED_AUTO_RELEASE_ToolsAwemeAuthListV2DataListSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListSubStatus', $value));
        }
        return (string) $value;
    }
}
