<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksPictureLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
