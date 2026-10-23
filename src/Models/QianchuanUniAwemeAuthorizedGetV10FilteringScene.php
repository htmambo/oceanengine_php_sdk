<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAuthorizedGetV10FilteringScene
{
    public const CREATE_QianchuanUniAwemeAuthorizedGetV10FilteringScene = 'CREATE';
    public const APPLY_QianchuanUniAwemeAuthorizedGetV10FilteringScene = 'APPLY';

    public const ALLOWED_VALUES = [
        self::CREATE_QianchuanUniAwemeAuthorizedGetV10FilteringScene,
        self::APPLY_QianchuanUniAwemeAuthorizedGetV10FilteringScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAuthorizedGetV10FilteringScene', $value));
        }
        return (string) $value;
    }
}
