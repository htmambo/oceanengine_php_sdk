<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudiencePlatform
{
    public const ANDROID_StdProjectListV30DataListAudiencePlatform = 'ANDROID';
    public const HARMONY_StdProjectListV30DataListAudiencePlatform = 'HARMONY';
    public const IOS_StdProjectListV30DataListAudiencePlatform = 'IOS';
    public const IPAD_StdProjectListV30DataListAudiencePlatform = 'IPAD';
    public const NONE_StdProjectListV30DataListAudiencePlatform = 'NONE';
    public const PC_StdProjectListV30DataListAudiencePlatform = 'PC';
    public const WAP_StdProjectListV30DataListAudiencePlatform = 'WAP';

    public const ALLOWED_VALUES = [
        self::ANDROID_StdProjectListV30DataListAudiencePlatform,
        self::HARMONY_StdProjectListV30DataListAudiencePlatform,
        self::IOS_StdProjectListV30DataListAudiencePlatform,
        self::IPAD_StdProjectListV30DataListAudiencePlatform,
        self::NONE_StdProjectListV30DataListAudiencePlatform,
        self::PC_StdProjectListV30DataListAudiencePlatform,
        self::WAP_StdProjectListV30DataListAudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudiencePlatform', $value));
        }
        return (string) $value;
    }
}
