<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform
{
    public const AD_OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'AD';
    public const CONTENT_OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform = 'CONTENT';

    public const ALLOWED_VALUES = [
        self::AD_OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform,
        self::CONTENT_OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform', $value));
        }
        return (string) $value;
    }
}
