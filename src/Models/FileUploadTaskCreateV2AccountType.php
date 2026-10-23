<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileUploadTaskCreateV2AccountType
{
    public const ADVERTISER_FileUploadTaskCreateV2AccountType = 'ADVERTISER';
    public const AGENT_FileUploadTaskCreateV2AccountType = 'AGENT';
    public const EBP_FileUploadTaskCreateV2AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_FileUploadTaskCreateV2AccountType,
        self::AGENT_FileUploadTaskCreateV2AccountType,
        self::EBP_FileUploadTaskCreateV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileUploadTaskCreateV2AccountType', $value));
        }
        return (string) $value;
    }
}
