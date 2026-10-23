<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksButtonDownloadEventIosLinkLinkType', $value));
        }
        return (string) $value;
    }
}
