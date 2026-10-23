<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataMaterialListType
{
    public const IMAGE_AgentQueryRiskPromotionListV2DataDataMaterialListType = 'IMAGE';
    public const VIDEO_AgentQueryRiskPromotionListV2DataDataMaterialListType = 'VIDEO';
    public const SITE_AgentQueryRiskPromotionListV2DataDataMaterialListType = 'SITE';

    public const ALLOWED_VALUES = [
        self::IMAGE_AgentQueryRiskPromotionListV2DataDataMaterialListType,
        self::VIDEO_AgentQueryRiskPromotionListV2DataDataMaterialListType,
        self::SITE_AgentQueryRiskPromotionListV2DataDataMaterialListType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataMaterialListType', $value));
        }
        return (string) $value;
    }
}
