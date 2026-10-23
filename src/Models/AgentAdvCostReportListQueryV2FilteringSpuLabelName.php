<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2FilteringSpuLabelName
{
    public const BRAND_CONVERSION_AgentAdvCostReportListQueryV2FilteringSpuLabelName = 'BRAND_CONVERSION';
    public const BRAND_EXPOSURE_AgentAdvCostReportListQueryV2FilteringSpuLabelName = 'BRAND_EXPOSURE';
    public const BRAND_GRASS_AgentAdvCostReportListQueryV2FilteringSpuLabelName = 'BRAND_GRASS';
    public const CONCENTRATING_RESOURCE_AgentAdvCostReportListQueryV2FilteringSpuLabelName = 'CONCENTRATING_RESOURCE';
    public const STAR_RESOURCE_AgentAdvCostReportListQueryV2FilteringSpuLabelName = 'STAR_RESOURCE';

    public const ALLOWED_VALUES = [
        self::BRAND_CONVERSION_AgentAdvCostReportListQueryV2FilteringSpuLabelName,
        self::BRAND_EXPOSURE_AgentAdvCostReportListQueryV2FilteringSpuLabelName,
        self::BRAND_GRASS_AgentAdvCostReportListQueryV2FilteringSpuLabelName,
        self::CONCENTRATING_RESOURCE_AgentAdvCostReportListQueryV2FilteringSpuLabelName,
        self::STAR_RESOURCE_AgentAdvCostReportListQueryV2FilteringSpuLabelName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2FilteringSpuLabelName', $value));
        }
        return (string) $value;
    }
}
