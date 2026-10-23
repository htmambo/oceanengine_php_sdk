<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataBusinessType
{
    public const AD_AgentQueryRiskPromotionListV2DataDataBusinessType = 'AD';
    public const QIANCHUAN_AgentQueryRiskPromotionListV2DataDataBusinessType = 'QIANCHUAN';
    public const LOCAL_AgentQueryRiskPromotionListV2DataDataBusinessType = 'LOCAL';

    public const ALLOWED_VALUES = [
        self::AD_AgentQueryRiskPromotionListV2DataDataBusinessType,
        self::QIANCHUAN_AgentQueryRiskPromotionListV2DataDataBusinessType,
        self::LOCAL_AgentQueryRiskPromotionListV2DataDataBusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataBusinessType', $value));
        }
        return (string) $value;
    }
}
