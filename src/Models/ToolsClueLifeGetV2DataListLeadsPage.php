<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListLeadsPage
{
    public const POI_ToolsClueLifeGetV2DataListLeadsPage = 'POI';
    public const PRODUCT_DETAIL_ToolsClueLifeGetV2DataListLeadsPage = 'PRODUCT_DETAIL';
    public const OTHER_ToolsClueLifeGetV2DataListLeadsPage = 'OTHER';
    public const SITE_ToolsClueLifeGetV2DataListLeadsPage = 'SITE';

    public const ALLOWED_VALUES = [
        self::POI_ToolsClueLifeGetV2DataListLeadsPage,
        self::PRODUCT_DETAIL_ToolsClueLifeGetV2DataListLeadsPage,
        self::OTHER_ToolsClueLifeGetV2DataListLeadsPage,
        self::SITE_ToolsClueLifeGetV2DataListLeadsPage,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListLeadsPage', $value));
        }
        return (string) $value;
    }
}
