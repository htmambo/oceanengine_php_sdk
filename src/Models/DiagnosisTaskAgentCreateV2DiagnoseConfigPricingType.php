<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType
{
    public const OCPC_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType = 'OCPC';
    public const CPA_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType = 'CPA';
    public const OCPM_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType = 'OCPM';

    public const ALLOWED_VALUES = [
        self::OCPC_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType,
        self::CPA_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType,
        self::OCPM_DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAgentCreateV2DiagnoseConfigPricingType', $value));
        }
        return (string) $value;
    }
}
