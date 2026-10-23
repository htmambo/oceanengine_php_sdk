<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsOrangeSiteGetV30DataListConsultSiteType
{
    public const FORM_ToolsOrangeSiteGetV30DataListConsultSiteType = 'FORM';
    public const MESSAGE_ToolsOrangeSiteGetV30DataListConsultSiteType = 'MESSAGE';
    public const TELE_ToolsOrangeSiteGetV30DataListConsultSiteType = 'TELE';

    public const ALLOWED_VALUES = [
        self::FORM_ToolsOrangeSiteGetV30DataListConsultSiteType,
        self::MESSAGE_ToolsOrangeSiteGetV30DataListConsultSiteType,
        self::TELE_ToolsOrangeSiteGetV30DataListConsultSiteType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsOrangeSiteGetV30DataListConsultSiteType', $value));
        }
        return (string) $value;
    }
}
