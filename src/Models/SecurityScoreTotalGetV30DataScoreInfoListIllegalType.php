<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreTotalGetV30DataScoreInfoListIllegalType
{
    public const BACKLINKGENERAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'BACKLINKGENERAL';
    public const BACKLINKSERIOUS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'BACKLINKSERIOUS';
    public const CRITICAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'CRITICAL';
    public const GENERAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'GENERAL';
    public const MINOR_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'MINOR';
    public const ONECLASS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'ONECLASS';
    public const SERIOUS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'SERIOUS';
    public const TWOTHREECLASS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType = 'TWOTHREECLASS';

    public const ALLOWED_VALUES = [
        self::BACKLINKGENERAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::BACKLINKSERIOUS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::CRITICAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::GENERAL_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::MINOR_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::ONECLASS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::SERIOUS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
        self::TWOTHREECLASS_SecurityScoreTotalGetV30DataScoreInfoListIllegalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreTotalGetV30DataScoreInfoListIllegalType', $value));
        }
        return (string) $value;
    }
}
