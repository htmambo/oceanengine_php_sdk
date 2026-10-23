<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoUploadTaskListV2AccountType
{
    public const ADVERTISER_FileVideoUploadTaskListV2AccountType = 'ADVERTISER';
    public const AGENT_FileVideoUploadTaskListV2AccountType = 'AGENT';
    public const EBP_FileVideoUploadTaskListV2AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_FileVideoUploadTaskListV2AccountType,
        self::AGENT_FileVideoUploadTaskListV2AccountType,
        self::EBP_FileVideoUploadTaskListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoUploadTaskListV2AccountType', $value));
        }
        return (string) $value;
    }
}
