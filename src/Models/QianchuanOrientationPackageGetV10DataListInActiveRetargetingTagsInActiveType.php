<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType
{
    public const EXPIRE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType = 'EXPIRE';
    public const TAG_OFFLINE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType = 'TAG_OFFLINE';
    public const MANUAL_OFFLINE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType = 'MANUAL_OFFLINE';

    public const ALLOWED_VALUES = [
        self::EXPIRE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType,
        self::TAG_OFFLINE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType,
        self::MANUAL_OFFLINE_QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType', $value));
        }
        return (string) $value;
    }
}
