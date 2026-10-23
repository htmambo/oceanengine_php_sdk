<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListPrivateChatAnchorButton
{
    public const PRIVATE_MESSAGE_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton = 'PRIVATE_MESSAGE';
    public const CONSULT_NOW_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton = 'CONSULT_NOW';
    public const CONSULT_ADVISOR_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton = 'CONSULT_ADVISOR';
    public const CONSULT_DESIGNER_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton = 'CONSULT_DESIGNER';
    public const ASK_TEACHER_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton = 'ASK_TEACHER';

    public const ALLOWED_VALUES = [
        self::PRIVATE_MESSAGE_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton,
        self::CONSULT_NOW_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton,
        self::CONSULT_ADVISOR_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton,
        self::CONSULT_DESIGNER_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton,
        self::ASK_TEACHER_NativeAnchorGetDetailV30DataListPrivateChatAnchorButton,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListPrivateChatAnchorButton', $value));
        }
        return (string) $value;
    }
}
