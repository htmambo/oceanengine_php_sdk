<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterFundTransferSeqCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $amount = null;

    /**
     * @var int
     */
    protected ?int $targetAdvertiserId = null;

    /**
     * @var \Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2TransferType
     */
    protected ?string $transferType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTargetAdvertiserId(): ?int
    {
        return $this->targetAdvertiserId;
    }

    /**
     * @param int $targetAdvertiserId
     * @return self
     */
    public function setTargetAdvertiserId(?int $targetAdvertiserId): self
    {
        $this->targetAdvertiserId = $targetAdvertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2TransferType
     */
    public function getTransferType(): ?string
    {
        return $this->transferType;
    }

    /**
     * @param \Oceanengine\Models\CustomerCenterFundTransferSeqCreateV2TransferType $transferType
     * @return self
     */
    public function setTransferType(?string $transferType): self
    {
        $this->transferType = $transferType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
        }
        if ($this->transferType !== null) {
            $result['transfer_type'] = $this->transferType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (int) $v;
        }
        if (($v = $data['transfer_type'] ?? null) !== null) {
            $obj->transferType = (string) $v;
        }
        return $obj;
    }
}
