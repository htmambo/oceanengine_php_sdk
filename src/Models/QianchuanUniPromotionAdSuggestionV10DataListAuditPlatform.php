<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform
{
    public const UNKNOWN_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform = 'UNKNOWN';
    public const AD_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform = 'AD';
    public const CONTENT_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform = 'CONTENT';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform,
        self::AD_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform,
        self::CONTENT_QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform', $value));
        }
        return (string) $value;
    }
}
