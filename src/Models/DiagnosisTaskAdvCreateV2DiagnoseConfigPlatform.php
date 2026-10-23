<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform
{
    public const AD_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform = 'AD';
    public const LOCAL_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform = 'LOCAL';
    public const QIANCHUAN_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform,
        self::LOCAL_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform,
        self::QIANCHUAN_DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DiagnosisTaskAdvCreateV2DiagnoseConfigPlatform', $value));
        }
        return (string) $value;
    }
}
