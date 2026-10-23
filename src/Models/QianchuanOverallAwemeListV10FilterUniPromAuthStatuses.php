<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10FilterUniPromAuthStatuses
{
    public const ALLIANCE_AUTO_AUTH_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses = 'ALLIANCE_AUTO_AUTH';
    public const APPROVED_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses = 'APPROVED';
    public const NO_AUTH_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses = 'NO_AUTH';

    public const ALLOWED_VALUES = [
        self::ALLIANCE_AUTO_AUTH_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses,
        self::APPROVED_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses,
        self::NO_AUTH_QianchuanOverallAwemeListV10FilterUniPromAuthStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10FilterUniPromAuthStatuses', $value));
        }
        return (string) $value;
    }
}
