<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksPictureGroupContentLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
