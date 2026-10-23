<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringCreativeMaterialModes
{
    public const STATIC_ASSEMBLE_ReportCampaignGetV2FilteringCreativeMaterialModes = 'STATIC_ASSEMBLE';
    public const CTR_ReportCampaignGetV2FilteringCreativeMaterialModes = 'CTR';
    public const INTERVENE_ReportCampaignGetV2FilteringCreativeMaterialModes = 'INTERVENE';

    public const ALLOWED_VALUES = [
        self::STATIC_ASSEMBLE_ReportCampaignGetV2FilteringCreativeMaterialModes,
        self::CTR_ReportCampaignGetV2FilteringCreativeMaterialModes,
        self::INTERVENE_ReportCampaignGetV2FilteringCreativeMaterialModes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringCreativeMaterialModes', $value));
        }
        return (string) $value;
    }
}
