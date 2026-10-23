<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NearRealtimeCostGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 消耗，单位(元)
     * @var float
     */
    protected ?float $cost = null;

    /**
     * 日期，
     * @var string
     */
    protected ?string $date = null;

    /**
     * 共享钱包id
     * @var int
     */
    protected ?int $sharedWalletId = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 广告主id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 消耗，单位(元)
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 消耗，单位(元)
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 日期，
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期，
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 共享钱包id
     * @return int
     */
    public function getSharedWalletId(): ?int
    {
        return $this->sharedWalletId;
    }

    /**
     * 共享钱包id
     * @param int $sharedWalletId
     * @return self
     */
    public function setSharedWalletId(?int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->sharedWalletId !== null) {
            $result['shared_wallet_id'] = $this->sharedWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['shared_wallet_id'] ?? null) !== null) {
            $obj->sharedWalletId = (int) $v;
        }
        return $obj;
    }
}
