<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoAuditV30OptStatus
{
    public const PASS_StardeliveryTaskAuthorVideoAuditV30OptStatus = 'PASS';
    public const REJECT_StardeliveryTaskAuthorVideoAuditV30OptStatus = 'REJECT';

    public const ALLOWED_VALUES = [
        self::PASS_StardeliveryTaskAuthorVideoAuditV30OptStatus,
        self::REJECT_StardeliveryTaskAuthorVideoAuditV30OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoAuditV30OptStatus', $value));
        }
        return (string) $value;
    }
}
