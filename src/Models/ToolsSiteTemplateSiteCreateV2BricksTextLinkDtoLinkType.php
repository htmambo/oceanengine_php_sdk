<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksTextLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
