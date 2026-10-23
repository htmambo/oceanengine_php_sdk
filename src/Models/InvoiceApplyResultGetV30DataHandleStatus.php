<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class InvoiceApplyResultGetV30DataHandleStatus
{
    public const FAILED_InvoiceApplyResultGetV30DataHandleStatus = 'FAILED';
    public const PROCESSING_InvoiceApplyResultGetV30DataHandleStatus = 'PROCESSING';
    public const SUCCESS_InvoiceApplyResultGetV30DataHandleStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_InvoiceApplyResultGetV30DataHandleStatus,
        self::PROCESSING_InvoiceApplyResultGetV30DataHandleStatus,
        self::SUCCESS_InvoiceApplyResultGetV30DataHandleStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum InvoiceApplyResultGetV30DataHandleStatus', $value));
        }
        return (string) $value;
    }
}
