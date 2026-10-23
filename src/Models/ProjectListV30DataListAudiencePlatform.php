<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudiencePlatform
{
    public const ANDROID_ProjectListV30DataListAudiencePlatform = 'ANDROID';
    public const HARMONY_ProjectListV30DataListAudiencePlatform = 'HARMONY';
    public const IOS_ProjectListV30DataListAudiencePlatform = 'IOS';
    public const IPAD_ProjectListV30DataListAudiencePlatform = 'IPAD';
    public const NONE_ProjectListV30DataListAudiencePlatform = 'NONE';
    public const PC_ProjectListV30DataListAudiencePlatform = 'PC';
    public const WAP_ProjectListV30DataListAudiencePlatform = 'WAP';

    public const ALLOWED_VALUES = [
        self::ANDROID_ProjectListV30DataListAudiencePlatform,
        self::HARMONY_ProjectListV30DataListAudiencePlatform,
        self::IOS_ProjectListV30DataListAudiencePlatform,
        self::IPAD_ProjectListV30DataListAudiencePlatform,
        self::NONE_ProjectListV30DataListAudiencePlatform,
        self::PC_ProjectListV30DataListAudiencePlatform,
        self::WAP_ProjectListV30DataListAudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudiencePlatform', $value));
        }
        return (string) $value;
    }
}
