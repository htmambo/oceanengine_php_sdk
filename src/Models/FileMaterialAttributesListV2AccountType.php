<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileMaterialAttributesListV2AccountType
{
    public const BP_FileMaterialAttributesListV2AccountType = 'BP';
    public const AGENT_FileMaterialAttributesListV2AccountType = 'AGENT';
    public const AD_FileMaterialAttributesListV2AccountType = 'AD';
    public const QIANCHUAN_FileMaterialAttributesListV2AccountType = 'QIANCHUAN';
    public const LOCAL_FileMaterialAttributesListV2AccountType = 'LOCAL';

    public const ALLOWED_VALUES = [
        self::BP_FileMaterialAttributesListV2AccountType,
        self::AGENT_FileMaterialAttributesListV2AccountType,
        self::AD_FileMaterialAttributesListV2AccountType,
        self::QIANCHUAN_FileMaterialAttributesListV2AccountType,
        self::LOCAL_FileMaterialAttributesListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileMaterialAttributesListV2AccountType', $value));
        }
        return (string) $value;
    }
}
