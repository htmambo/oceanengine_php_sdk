<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksButtonEventType
{
    public const APPOINT_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType = 'APPOINT_EVENT';
    public const DOWNLOAD_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType = 'DOWNLOAD_EVENT';
    public const LINK_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType = 'LINK_EVENT';
    public const TELEPHONE_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType = 'TELEPHONE_EVENT';

    public const ALLOWED_VALUES = [
        self::APPOINT_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType,
        self::DOWNLOAD_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType,
        self::LINK_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType,
        self::TELEPHONE_EVENT_ToolsSiteTemplateCreateV2DataBricksButtonEventType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksButtonEventType', $value));
        }
        return (string) $value;
    }
}
