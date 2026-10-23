<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10AudienceAudienceMode
{
    public const ATUO_QianchuanAwemeOrderCreateV10AudienceAudienceMode = 'ATUO';
    public const CUSTOM_QianchuanAwemeOrderCreateV10AudienceAudienceMode = 'CUSTOM';
    public const FANS_QianchuanAwemeOrderCreateV10AudienceAudienceMode = 'FANS';
    public const LIVEFANS_QianchuanAwemeOrderCreateV10AudienceAudienceMode = 'LIVEFANS';

    public const ALLOWED_VALUES = [
        self::ATUO_QianchuanAwemeOrderCreateV10AudienceAudienceMode,
        self::CUSTOM_QianchuanAwemeOrderCreateV10AudienceAudienceMode,
        self::FANS_QianchuanAwemeOrderCreateV10AudienceAudienceMode,
        self::LIVEFANS_QianchuanAwemeOrderCreateV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
