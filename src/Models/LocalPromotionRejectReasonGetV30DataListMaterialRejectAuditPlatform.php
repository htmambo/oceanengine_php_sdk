<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform
{
    public const AD_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'AD';
    public const CONTENT_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'CONTENT';
    public const UNKNOWN_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'Unknown';

    public const ALLOWED_VALUES = [
        self::AD_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform,
        self::CONTENT_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform,
        self::UNKNOWN_LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform', $value));
        }
        return (string) $value;
    }
}
