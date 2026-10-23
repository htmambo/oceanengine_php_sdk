<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringFinalOperatorTag
{
    public const DECREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag = 'DECREASE_QUANTITY';
    public const EMPTY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag = 'EMPTY';
    public const INCREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag = 'INCREASE_QUANTITY';
    public const NON_DESCEND_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag = 'NON_DESCEND';
    public const SELF_OPERATION_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag = 'SELF_OPERATION';

    public const ALLOWED_VALUES = [
        self::DECREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag,
        self::EMPTY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag,
        self::INCREASE_QUANTITY_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag,
        self::NON_DESCEND_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag,
        self::SELF_OPERATION_AgentQueryRiskPromotionListV2FilteringFinalOperatorTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringFinalOperatorTag', $value));
        }
        return (string) $value;
    }
}
