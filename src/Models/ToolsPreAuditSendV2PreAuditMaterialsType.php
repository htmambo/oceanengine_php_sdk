<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPreAuditSendV2PreAuditMaterialsType
{
    public const IMG_ToolsPreAuditSendV2PreAuditMaterialsType = 'IMG';
    public const SITE_ToolsPreAuditSendV2PreAuditMaterialsType = 'SITE';
    public const TITLE_ToolsPreAuditSendV2PreAuditMaterialsType = 'TITLE';
    public const VIDEO_ToolsPreAuditSendV2PreAuditMaterialsType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMG_ToolsPreAuditSendV2PreAuditMaterialsType,
        self::SITE_ToolsPreAuditSendV2PreAuditMaterialsType,
        self::TITLE_ToolsPreAuditSendV2PreAuditMaterialsType,
        self::VIDEO_ToolsPreAuditSendV2PreAuditMaterialsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPreAuditSendV2PreAuditMaterialsType', $value));
        }
        return (string) $value;
    }
}
