<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderUploadCpsTaskSalesV2RequestSalesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var int
     */
    protected ?int $billTime = null;

    /**
     * @var int
     */
    protected ?int $contentId = null;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillTime(): ?int
    {
        return $this->billTime;
    }

    /**
     * @param int $billTime
     * @return self
     */
    public function setBillTime(?int $billTime): self
    {
        $this->billTime = $billTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getContentId(): ?int
    {
        return $this->contentId;
    }

    /**
     * @param int $contentId
     * @return self
     */
    public function setContentId(?int $contentId): self
    {
        $this->contentId = $contentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->billTime !== null) {
            $result['bill_time'] = $this->billTime;
        }
        if ($this->contentId !== null) {
            $result['content_id'] = $this->contentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['bill_time'] ?? null) !== null) {
            $obj->billTime = (int) $v;
        }
        if (($v = $data['content_id'] ?? null) !== null) {
            $obj->contentId = (int) $v;
        }
        return $obj;
    }
}
