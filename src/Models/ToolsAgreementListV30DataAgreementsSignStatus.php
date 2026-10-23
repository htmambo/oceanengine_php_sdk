<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAgreementListV30DataAgreementsSignStatus
{
    public const UNSIGNED_ToolsAgreementListV30DataAgreementsSignStatus = 'UNSIGNED';
    public const SIGNED_ToolsAgreementListV30DataAgreementsSignStatus = 'SIGNED';

    public const ALLOWED_VALUES = [
        self::UNSIGNED_ToolsAgreementListV30DataAgreementsSignStatus,
        self::SIGNED_ToolsAgreementListV30DataAgreementsSignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAgreementListV30DataAgreementsSignStatus', $value));
        }
        return (string) $value;
    }
}
