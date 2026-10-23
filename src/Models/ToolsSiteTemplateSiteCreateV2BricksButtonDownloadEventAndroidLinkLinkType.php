<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventAndroidLinkLinkType', $value));
        }
        return (string) $value;
    }
}
