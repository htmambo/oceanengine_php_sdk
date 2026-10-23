<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletSharedRelationCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 绑定时返回0
     * @var int
     */
    protected ?int $fromWalletId = null;

    /**
     * 操作id
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * 解绑时返回0
     * @var int
     */
    protected ?int $toWalletId = null;

    /**
     * 绑定时返回0
     * @return int
     */
    public function getFromWalletId(): ?int
    {
        return $this->fromWalletId;
    }

    /**
     * 绑定时返回0
     * @param int $fromWalletId
     * @return self
     */
    public function setFromWalletId(?int $fromWalletId): self
    {
        $this->fromWalletId = $fromWalletId;
        return $this;
    }

    /**
     * 操作id
     * @return int
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }

    /**
     * 操作id
     * @param int $operationId
     * @return self
     */
    public function setOperationId(?int $operationId): self
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * 解绑时返回0
     * @return int
     */
    public function getToWalletId(): ?int
    {
        return $this->toWalletId;
    }

    /**
     * 解绑时返回0
     * @param int $toWalletId
     * @return self
     */
    public function setToWalletId(?int $toWalletId): self
    {
        $this->toWalletId = $toWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fromWalletId !== null) {
            $result['from_wallet_id'] = $this->fromWalletId;
        }
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->toWalletId !== null) {
            $result['to_wallet_id'] = $this->toWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['from_wallet_id'] ?? null) !== null) {
            $obj->fromWalletId = (int) $v;
        }
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['to_wallet_id'] ?? null) !== null) {
            $obj->toWalletId = (int) $v;
        }
        return $obj;
    }
}
