<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAgreementCreateV30DataSignStatus
{
    public const UNSIGNED_ToolsAgreementCreateV30DataSignStatus = 'UNSIGNED';
    public const SIGNED_ToolsAgreementCreateV30DataSignStatus = 'SIGNED';

    public const ALLOWED_VALUES = [
        self::UNSIGNED_ToolsAgreementCreateV30DataSignStatus,
        self::SIGNED_ToolsAgreementCreateV30DataSignStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAgreementCreateV30DataSignStatus', $value));
        }
        return (string) $value;
    }
}
