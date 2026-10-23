<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksButtonDownloadEventIosLinkLinkType', $value));
        }
        return (string) $value;
    }
}
