<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPreAuditGetV2DataListMaterialType
{
    public const IMG_ToolsPreAuditGetV2DataListMaterialType = 'IMG';
    public const SITE_ToolsPreAuditGetV2DataListMaterialType = 'SITE';
    public const TITLE_ToolsPreAuditGetV2DataListMaterialType = 'TITLE';
    public const VIDEO_ToolsPreAuditGetV2DataListMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMG_ToolsPreAuditGetV2DataListMaterialType,
        self::SITE_ToolsPreAuditGetV2DataListMaterialType,
        self::TITLE_ToolsPreAuditGetV2DataListMaterialType,
        self::VIDEO_ToolsPreAuditGetV2DataListMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPreAuditGetV2DataListMaterialType', $value));
        }
        return (string) $value;
    }
}
