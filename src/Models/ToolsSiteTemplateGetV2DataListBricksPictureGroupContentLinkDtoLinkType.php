<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksPictureGroupContentLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
