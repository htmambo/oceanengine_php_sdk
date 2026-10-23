<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksButtonLinkEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
