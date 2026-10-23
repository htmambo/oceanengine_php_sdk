<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType,
        self::URL_ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateSiteCreateV2BricksButtonAppointEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
