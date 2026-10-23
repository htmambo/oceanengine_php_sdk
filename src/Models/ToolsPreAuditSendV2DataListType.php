<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPreAuditSendV2DataListType
{
    public const IMG_ToolsPreAuditSendV2DataListType = 'IMG';
    public const SITE_ToolsPreAuditSendV2DataListType = 'SITE';
    public const TITLE_ToolsPreAuditSendV2DataListType = 'TITLE';
    public const VIDEO_ToolsPreAuditSendV2DataListType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMG_ToolsPreAuditSendV2DataListType,
        self::SITE_ToolsPreAuditSendV2DataListType,
        self::TITLE_ToolsPreAuditSendV2DataListType,
        self::VIDEO_ToolsPreAuditSendV2DataListType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPreAuditSendV2DataListType', $value));
        }
        return (string) $value;
    }
}
