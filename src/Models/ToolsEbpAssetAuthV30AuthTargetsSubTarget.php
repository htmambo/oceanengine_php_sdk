<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30AuthTargetsSubTarget
{
    public const AD_ToolsEbpAssetAuthV30AuthTargetsSubTarget = 'AD';
    public const QIANCHUAN_ToolsEbpAssetAuthV30AuthTargetsSubTarget = 'QIANCHUAN';
    public const LOCAL_ToolsEbpAssetAuthV30AuthTargetsSubTarget = 'LOCAL';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpAssetAuthV30AuthTargetsSubTarget,
        self::QIANCHUAN_ToolsEbpAssetAuthV30AuthTargetsSubTarget,
        self::LOCAL_ToolsEbpAssetAuthV30AuthTargetsSubTarget,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30AuthTargetsSubTarget', $value));
        }
        return (string) $value;
    }
}
