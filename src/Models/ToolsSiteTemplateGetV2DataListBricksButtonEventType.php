<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksButtonEventType
{
    public const APPOINT_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType = 'APPOINT_EVENT';
    public const DOWNLOAD_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType = 'DOWNLOAD_EVENT';
    public const LINK_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType = 'LINK_EVENT';
    public const TELEPHONE_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType = 'TELEPHONE_EVENT';

    public const ALLOWED_VALUES = [
        self::APPOINT_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType,
        self::DOWNLOAD_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType,
        self::LINK_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType,
        self::TELEPHONE_EVENT_ToolsSiteTemplateGetV2DataListBricksButtonEventType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksButtonEventType', $value));
        }
        return (string) $value;
    }
}
