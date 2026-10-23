<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventAndroidLinkLinkType', $value));
        }
        return (string) $value;
    }
}
