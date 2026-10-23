<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWatchRuleSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * 操作ID
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * 子钱包ID
     * @var int
     */
    protected ?int $subWalletId = null;

    /**
     * 操作ID
     * @return int
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }

    /**
     * 操作ID
     * @param int $operationId
     * @return self
     */
    public function setOperationId(?int $operationId): self
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * 子钱包ID
     * @return int
     */
    public function getSubWalletId(): ?int
    {
        return $this->subWalletId;
    }

    /**
     * 子钱包ID
     * @param int $subWalletId
     * @return self
     */
    public function setSubWalletId(?int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->subWalletId !== null) {
            $result['sub_wallet_id'] = $this->subWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['sub_wallet_id'] ?? null) !== null) {
            $obj->subWalletId = (int) $v;
        }
        return $obj;
    }
}
