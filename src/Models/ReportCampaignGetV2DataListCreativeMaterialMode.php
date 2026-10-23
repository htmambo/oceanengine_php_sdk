<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2DataListCreativeMaterialMode
{
    public const STATIC_ASSEMBLE_ReportCampaignGetV2DataListCreativeMaterialMode = 'STATIC_ASSEMBLE';
    public const CTR_ReportCampaignGetV2DataListCreativeMaterialMode = 'CTR';
    public const INTERVENE_ReportCampaignGetV2DataListCreativeMaterialMode = 'INTERVENE';

    public const ALLOWED_VALUES = [
        self::STATIC_ASSEMBLE_ReportCampaignGetV2DataListCreativeMaterialMode,
        self::CTR_ReportCampaignGetV2DataListCreativeMaterialMode,
        self::INTERVENE_ReportCampaignGetV2DataListCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2DataListCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}
