<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksButtonLinkEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
