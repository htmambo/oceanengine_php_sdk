<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarInfoV2DataInfoListStatus
{
    public const DELETED_StarInfoV2DataInfoListStatus = 'DELETED';
    public const ENABLE_StarInfoV2DataInfoListStatus = 'ENABLE';
    public const FROZEN_StarInfoV2DataInfoListStatus = 'FROZEN';
    public const NEW_PROTOCOL_StarInfoV2DataInfoListStatus = 'NEW_PROTOCOL';
    public const PUNISH_StarInfoV2DataInfoListStatus = 'PUNISH';
    public const QUALIFICATION_VERIFICATION_StarInfoV2DataInfoListStatus = 'QUALIFICATION_VERIFICATION';
    public const UN_PROTOCOL_StarInfoV2DataInfoListStatus = 'UN_PROTOCOL';

    public const ALLOWED_VALUES = [
        self::DELETED_StarInfoV2DataInfoListStatus,
        self::ENABLE_StarInfoV2DataInfoListStatus,
        self::FROZEN_StarInfoV2DataInfoListStatus,
        self::NEW_PROTOCOL_StarInfoV2DataInfoListStatus,
        self::PUNISH_StarInfoV2DataInfoListStatus,
        self::QUALIFICATION_VERIFICATION_StarInfoV2DataInfoListStatus,
        self::UN_PROTOCOL_StarInfoV2DataInfoListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarInfoV2DataInfoListStatus', $value));
        }
        return (string) $value;
    }
}
