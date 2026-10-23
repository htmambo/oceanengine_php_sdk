<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksButtonEventType
{
    public const APPOINT_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType = 'APPOINT_EVENT';
    public const DOWNLOAD_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType = 'DOWNLOAD_EVENT';
    public const LINK_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType = 'LINK_EVENT';
    public const TELEPHONE_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType = 'TELEPHONE_EVENT';

    public const ALLOWED_VALUES = [
        self::APPOINT_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType,
        self::DOWNLOAD_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType,
        self::LINK_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType,
        self::TELEPHONE_EVENT_ToolsSiteTemplateSiteCreateV2BricksButtonEventType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksButtonEventType', $value));
        }
        return (string) $value;
    }
}
