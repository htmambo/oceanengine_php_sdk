<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksTextLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
