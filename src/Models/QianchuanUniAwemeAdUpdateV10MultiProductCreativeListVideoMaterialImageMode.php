<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode
{
    public const VIDEO_LARGE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_LARGE_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10MultiProductCreativeListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
