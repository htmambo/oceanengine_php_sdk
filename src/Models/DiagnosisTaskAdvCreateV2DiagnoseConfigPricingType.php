<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType
{
    public const OCPC_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType = 'OCPC';
    public const CPA_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType = 'CPA';
    public const OCPM_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType = 'OCPM';

    public const ALLOWED_VALUES = [
        self::OCPC_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType,
        self::CPA_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType,
        self::OCPM_DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvCreateV2DiagnoseConfigPricingType', $value));
        }
        return (string) $value;
    }
}
