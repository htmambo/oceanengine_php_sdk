<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType
{
    public const QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType = 'QUICK_APP';
    public const SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType = 'SCHEME';
    public const URL_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType = 'URL';

    public const ALLOWED_VALUES = [
        self::QUICK_APP_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType,
        self::SCHEME_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType,
        self::URL_ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsSiteTemplateCreateV2DataBricksButtonAppointEventLinkLinkType', $value));
        }
        return (string) $value;
    }
}
