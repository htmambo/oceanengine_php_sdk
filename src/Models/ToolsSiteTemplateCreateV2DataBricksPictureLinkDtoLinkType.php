<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksPictureLinkDtoLinkType', $value));
        }
        return (string) $value;
    }
}
