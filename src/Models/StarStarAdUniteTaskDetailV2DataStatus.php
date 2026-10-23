<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarStarAdUniteTaskDetailV2DataStatus
{
    public const BILLING_StarStarAdUniteTaskDetailV2DataStatus = 'BILLING';
    public const BULLETIN_StarStarAdUniteTaskDetailV2DataStatus = 'BULLETIN';
    public const CANCELED_StarStarAdUniteTaskDetailV2DataStatus = 'CANCELED';
    public const CLOSED_StarStarAdUniteTaskDetailV2DataStatus = 'CLOSED';
    public const ENROLL_StarStarAdUniteTaskDetailV2DataStatus = 'ENROLL';
    public const FINISHED_StarStarAdUniteTaskDetailV2DataStatus = 'FINISHED';
    public const PROVIDER_ACCEPTING_StarStarAdUniteTaskDetailV2DataStatus = 'PROVIDER_ACCEPTING';
    public const STARTED_StarStarAdUniteTaskDetailV2DataStatus = 'STARTED';

    public const ALLOWED_VALUES = [
        self::BILLING_StarStarAdUniteTaskDetailV2DataStatus,
        self::BULLETIN_StarStarAdUniteTaskDetailV2DataStatus,
        self::CANCELED_StarStarAdUniteTaskDetailV2DataStatus,
        self::CLOSED_StarStarAdUniteTaskDetailV2DataStatus,
        self::ENROLL_StarStarAdUniteTaskDetailV2DataStatus,
        self::FINISHED_StarStarAdUniteTaskDetailV2DataStatus,
        self::PROVIDER_ACCEPTING_StarStarAdUniteTaskDetailV2DataStatus,
        self::STARTED_StarStarAdUniteTaskDetailV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarStarAdUniteTaskDetailV2DataStatus', $value));
        }
        return (string) $value;
    }
}
