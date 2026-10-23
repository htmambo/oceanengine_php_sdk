<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPreAuditGetV2FilterMaterialType
{
    public const IMG_ToolsPreAuditGetV2FilterMaterialType = 'IMG';
    public const SITE_ToolsPreAuditGetV2FilterMaterialType = 'SITE';
    public const TITLE_ToolsPreAuditGetV2FilterMaterialType = 'TITLE';
    public const VIDEO_ToolsPreAuditGetV2FilterMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMG_ToolsPreAuditGetV2FilterMaterialType,
        self::SITE_ToolsPreAuditGetV2FilterMaterialType,
        self::TITLE_ToolsPreAuditGetV2FilterMaterialType,
        self::VIDEO_ToolsPreAuditGetV2FilterMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPreAuditGetV2FilterMaterialType', $value));
        }
        return (string) $value;
    }
}
