<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType,
        self::URL_ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateGetV2DataListBricksButtonAppointEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
