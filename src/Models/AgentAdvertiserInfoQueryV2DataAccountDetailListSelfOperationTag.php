<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag
{
    public const DECREASE_QUANTITY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag = 'DECREASE_QUANTITY';
    public const EMPTY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag = 'EMPTY';
    public const INCREASE_QUANTITY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag = 'INCREASE_QUANTITY';
    public const NON_DESCEND_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag = 'NON_DESCEND';
    public const SELF_OPERATION_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag = 'SELF_OPERATION';

    public const ALLOWED_VALUES = [
        self::DECREASE_QUANTITY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag,
        self::EMPTY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag,
        self::INCREASE_QUANTITY_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag,
        self::NON_DESCEND_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag,
        self::SELF_OPERATION_AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserInfoQueryV2DataAccountDetailListSelfOperationTag', $value));
        }
        return (string) $value;
    }
}
