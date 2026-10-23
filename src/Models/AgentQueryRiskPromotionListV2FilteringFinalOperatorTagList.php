<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList
{
    public const DECREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList = 'DECREASE_QUANTITY';
    public const EMPTY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList = 'EMPTY';
    public const INCREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList = 'INCREASE_QUANTITY';
    public const NON_DESCEND_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList = 'NON_DESCEND';
    public const SELF_OPERATION_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList = 'SELF_OPERATION';

    public const ALLOWED_VALUES = [
        self::DECREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList,
        self::EMPTY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList,
        self::INCREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList,
        self::NON_DESCEND_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList,
        self::SELF_OPERATION_AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringFinalOperatorTagList', $value));
        }
        return (string) $value;
    }
}
