<?php

/**
 * 本文件由 go2php 生成
 *
 * 二进制下载接口（Go 中返回 []byte 的 endpoint）的响应载体。
 * Client::init() 注册的内部中间件会把原始响应体 base64 后放入 _b 键，
 * 核心层 call() 因此可以走常规的 fromArray 解码通道把字节串交还给
 * execute(): string。
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BinaryResponse
{
    public static function fromArray(array $data): string
    {
        return base64_decode((string)($data['_b'] ?? ''), true) ?: '';
    }
}
