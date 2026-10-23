<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform
{
    public const UNKNOWN_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform = 'UNKNOWN';
    public const AD_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform = 'AD';
    public const CONTENT_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform = 'CONTENT';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform,
        self::AD_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform,
        self::CONTENT_QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform', $value));
        }
        return (string) $value;
    }
}
