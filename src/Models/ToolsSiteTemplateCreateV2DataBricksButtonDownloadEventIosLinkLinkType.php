<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksButtonDownloadEventIosLinkLinkType', $value));
        }
        return (string) $value;
    }
}
