<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform
{
    public const AD_PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'AD';
    public const CONTENT_PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'CONTENT';

    public const ALLOWED_VALUES = [
        self::AD_PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform,
        self::CONTENT_PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform', $value));
        }
        return (string) $value;
    }
}
