<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserCopyV2ReportType
{
    public const EMPTY_AgentAdvertiserCopyV2ReportType = 'EMPTY';
    public const INCREASE_QUANTITY_AgentAdvertiserCopyV2ReportType = 'INCREASE_QUANTITY';
    public const SELF_OPERATION_AgentAdvertiserCopyV2ReportType = 'SELF_OPERATION';
    public const INCREASE_QUANTITY_QUANTITY_AgentAdvertiserCopyV2ReportType = 'INCREASE_QUANTITY_QUANTITY';
    public const ASCEND_REPORT_AgentAdvertiserCopyV2ReportType = 'ASCEND_REPORT';
    public const DESCEND_REPORT_AgentAdvertiserCopyV2ReportType = 'DESCEND_REPORT';
    public const NON_DESCEND_REPORT_AgentAdvertiserCopyV2ReportType = 'NON_DESCEND_REPORT';

    public const ALLOWED_VALUES = [
        self::EMPTY_AgentAdvertiserCopyV2ReportType,
        self::INCREASE_QUANTITY_AgentAdvertiserCopyV2ReportType,
        self::SELF_OPERATION_AgentAdvertiserCopyV2ReportType,
        self::INCREASE_QUANTITY_QUANTITY_AgentAdvertiserCopyV2ReportType,
        self::ASCEND_REPORT_AgentAdvertiserCopyV2ReportType,
        self::DESCEND_REPORT_AgentAdvertiserCopyV2ReportType,
        self::NON_DESCEND_REPORT_AgentAdvertiserCopyV2ReportType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserCopyV2ReportType', $value));
        }
        return (string) $value;
    }
}
