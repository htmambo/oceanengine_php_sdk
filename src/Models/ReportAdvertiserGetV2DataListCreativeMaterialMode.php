<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListCreativeMaterialMode
{
    public const STATIC_ASSEMBLE_ReportAdvertiserGetV2DataListCreativeMaterialMode = 'STATIC_ASSEMBLE';
    public const CTR_ReportAdvertiserGetV2DataListCreativeMaterialMode = 'CTR';
    public const INTERVENE_ReportAdvertiserGetV2DataListCreativeMaterialMode = 'INTERVENE';

    public const ALLOWED_VALUES = [
        self::STATIC_ASSEMBLE_ReportAdvertiserGetV2DataListCreativeMaterialMode,
        self::CTR_ReportAdvertiserGetV2DataListCreativeMaterialMode,
        self::INTERVENE_ReportAdvertiserGetV2DataListCreativeMaterialMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListCreativeMaterialMode', $value));
        }
        return (string) $value;
    }
}
