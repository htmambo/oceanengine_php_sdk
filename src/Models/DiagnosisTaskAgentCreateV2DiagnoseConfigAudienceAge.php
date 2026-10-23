<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge
{
    public const ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = 'ALL';
    public const Enum_18_23_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = '18-23';
    public const Enum_24_30_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = '24-30';
    public const Enum_31_40_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = '31-40';
    public const Enum_41_49_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = '41-49';
    public const Enum_50_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge = '50';

    public const ALLOWED_VALUES = [
        self::ALL_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
        self::Enum_18_23_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
        self::Enum_24_30_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
        self::Enum_31_40_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
        self::Enum_41_49_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
        self::Enum_50_DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentCreateV2DiagnoseConfigAudienceAge', $value));
        }
        return (string) $value;
    }
}
