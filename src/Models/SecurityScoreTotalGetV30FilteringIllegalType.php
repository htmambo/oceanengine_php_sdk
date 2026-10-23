<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreTotalGetV30FilteringIllegalType
{
    public const BACKLINKGENERAL_SecurityScoreTotalGetV30FilteringIllegalType = 'BACKLINKGENERAL';
    public const BACKLINKSERIOUS_SecurityScoreTotalGetV30FilteringIllegalType = 'BACKLINKSERIOUS';
    public const CRITICAL_SecurityScoreTotalGetV30FilteringIllegalType = 'CRITICAL';
    public const GENERAL_SecurityScoreTotalGetV30FilteringIllegalType = 'GENERAL';
    public const MINOR_SecurityScoreTotalGetV30FilteringIllegalType = 'MINOR';
    public const ONECLASS_SecurityScoreTotalGetV30FilteringIllegalType = 'ONECLASS';
    public const SERIOUS_SecurityScoreTotalGetV30FilteringIllegalType = 'SERIOUS';
    public const TWOTHREECLASS_SecurityScoreTotalGetV30FilteringIllegalType = 'TWOTHREECLASS';

    public const ALLOWED_VALUES = [
        self::BACKLINKGENERAL_SecurityScoreTotalGetV30FilteringIllegalType,
        self::BACKLINKSERIOUS_SecurityScoreTotalGetV30FilteringIllegalType,
        self::CRITICAL_SecurityScoreTotalGetV30FilteringIllegalType,
        self::GENERAL_SecurityScoreTotalGetV30FilteringIllegalType,
        self::MINOR_SecurityScoreTotalGetV30FilteringIllegalType,
        self::ONECLASS_SecurityScoreTotalGetV30FilteringIllegalType,
        self::SERIOUS_SecurityScoreTotalGetV30FilteringIllegalType,
        self::TWOTHREECLASS_SecurityScoreTotalGetV30FilteringIllegalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreTotalGetV30FilteringIllegalType', $value));
        }
        return (string) $value;
    }
}
