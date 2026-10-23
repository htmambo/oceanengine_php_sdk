<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksPictureLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
