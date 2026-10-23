<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterFundTransferSeqCommitV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $targetAdvertiserId = null;

    /**
     * @var int
     */
    protected ?int $transactionSeq = null;

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
     * @return int
     */
    public function getTransactionSeq(): ?int
    {
        return $this->transactionSeq;
    }

    /**
     * @param int $transactionSeq
     * @return self
     */
    public function setTransactionSeq(?int $transactionSeq): self
    {
        $this->transactionSeq = $transactionSeq;
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
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
        }
        if ($this->transactionSeq !== null) {
            $result['transaction_seq'] = $this->transactionSeq;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (int) $v;
        }
        if (($v = $data['transaction_seq'] ?? null) !== null) {
            $obj->transactionSeq = (int) $v;
        }
        return $obj;
    }
}
