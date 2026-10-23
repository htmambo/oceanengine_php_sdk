<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataFinalOperatorTag
{
    public const DECREASE_QUANTITY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag = 'DECREASE_QUANTITY';
    public const EMPTY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag = 'EMPTY';
    public const INCREASE_QUANTITY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag = 'INCREASE_QUANTITY';
    public const NON_DESCEND_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag = 'NON_DESCEND';
    public const SELF_OPERATION_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag = 'SELF_OPERATION';

    public const ALLOWED_VALUES = [
        self::DECREASE_QUANTITY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag,
        self::EMPTY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag,
        self::INCREASE_QUANTITY_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag,
        self::NON_DESCEND_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag,
        self::SELF_OPERATION_AgentQueryRiskPromotionListV2DataDataFinalOperatorTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataFinalOperatorTag', $value));
        }
        return (string) $value;
    }
}
