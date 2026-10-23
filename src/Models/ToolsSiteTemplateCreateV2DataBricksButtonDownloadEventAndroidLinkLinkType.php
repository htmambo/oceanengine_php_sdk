<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventAndroidLinkLinkType', $value));
        }
        return (string) $value;
    }
}
