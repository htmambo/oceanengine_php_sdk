<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletSharedRelationCreateV30RelationChangeMode
{
    public const BIND_SharedWalletSharedRelationCreateV30RelationChangeMode = 'bind';
    public const TRANSFER_SharedWalletSharedRelationCreateV30RelationChangeMode = 'transfer';
    public const UNBIND_SharedWalletSharedRelationCreateV30RelationChangeMode = 'unbind';

    public const ALLOWED_VALUES = [
        self::BIND_SharedWalletSharedRelationCreateV30RelationChangeMode,
        self::TRANSFER_SharedWalletSharedRelationCreateV30RelationChangeMode,
        self::UNBIND_SharedWalletSharedRelationCreateV30RelationChangeMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletSharedRelationCreateV30RelationChangeMode', $value));
        }
        return (string) $value;
    }
}
