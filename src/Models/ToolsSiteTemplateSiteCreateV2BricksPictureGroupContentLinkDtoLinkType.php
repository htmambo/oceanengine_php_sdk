<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksPictureGroupContentLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
