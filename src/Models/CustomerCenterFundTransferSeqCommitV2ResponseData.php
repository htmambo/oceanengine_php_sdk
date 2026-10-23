<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterFundTransferSeqCommitV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $transactionSeq = null;

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
        if ($this->transactionSeq !== null) {
            $result['transaction_seq'] = $this->transactionSeq;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['transaction_seq'] ?? null) !== null) {
            $obj->transactionSeq = (int) $v;
        }
        return $obj;
    }
}
