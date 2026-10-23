<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksButtonLinkEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
