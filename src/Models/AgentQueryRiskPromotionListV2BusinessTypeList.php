<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2BusinessTypeList
{
    public const AD_AgentQueryRiskPromotionListV2BusinessTypeList = 'AD';
    public const QIANCHUAN_AgentQueryRiskPromotionListV2BusinessTypeList = 'QIANCHUAN';
    public const LOCAL_AgentQueryRiskPromotionListV2BusinessTypeList = 'LOCAL';

    public const ALLOWED_VALUES = [
        self::AD_AgentQueryRiskPromotionListV2BusinessTypeList,
        self::QIANCHUAN_AgentQueryRiskPromotionListV2BusinessTypeList,
        self::LOCAL_AgentQueryRiskPromotionListV2BusinessTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2BusinessTypeList', $value));
        }
        return (string) $value;
    }
}
