<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2BusinessType
{
    public const AD_AgentQueryRiskPromotionListV2BusinessType = 'AD';
    public const QIANCHUAN_AgentQueryRiskPromotionListV2BusinessType = 'QIANCHUAN';
    public const LOCAL_AgentQueryRiskPromotionListV2BusinessType = 'LOCAL';

    public const ALLOWED_VALUES = [
        self::AD_AgentQueryRiskPromotionListV2BusinessType,
        self::QIANCHUAN_AgentQueryRiskPromotionListV2BusinessType,
        self::LOCAL_AgentQueryRiskPromotionListV2BusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2BusinessType', $value));
        }
        return (string) $value;
    }
}
