<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListSpuLabelName
{
    public const BRAND_CONVERSION_AgentAdvCostReportListQueryV2DataListSpuLabelName = 'BRAND_CONVERSION';
    public const BRAND_EXPOSURE_AgentAdvCostReportListQueryV2DataListSpuLabelName = 'BRAND_EXPOSURE';
    public const BRAND_GRASS_AgentAdvCostReportListQueryV2DataListSpuLabelName = 'BRAND_GRASS';
    public const CONCENTRATING_RESOURCE_AgentAdvCostReportListQueryV2DataListSpuLabelName = 'CONCENTRATING_RESOURCE';
    public const STAR_RESOURCE_AgentAdvCostReportListQueryV2DataListSpuLabelName = 'STAR_RESOURCE';

    public const ALLOWED_VALUES = [
        self::BRAND_CONVERSION_AgentAdvCostReportListQueryV2DataListSpuLabelName,
        self::BRAND_EXPOSURE_AgentAdvCostReportListQueryV2DataListSpuLabelName,
        self::BRAND_GRASS_AgentAdvCostReportListQueryV2DataListSpuLabelName,
        self::CONCENTRATING_RESOURCE_AgentAdvCostReportListQueryV2DataListSpuLabelName,
        self::STAR_RESOURCE_AgentAdvCostReportListQueryV2DataListSpuLabelName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListSpuLabelName', $value));
        }
        return (string) $value;
    }
}
