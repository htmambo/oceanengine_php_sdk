<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform
{
    public const UNKNOWN_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform = 'UNKNOWN';
    public const CONTENT_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform = 'CONTENT';
    public const AD_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform = 'AD';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform,
        self::CONTENT_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform,
        self::AD_QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform', $value));
        }
        return (string) $value;
    }
}
