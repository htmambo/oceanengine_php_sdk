<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderQueryCpsTaskSalesV2ResponseDataSalesInner implements \JsonSerializable
{
    /**
     * 单位分
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
     * @var string
     */
    protected ?string $settleTime = null;

    /**
     * 单位分
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * 单位分
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
     * @return string
     */
    public function getSettleTime(): ?string
    {
        return $this->settleTime;
    }

    /**
     * @param string $settleTime
     * @return self
     */
    public function setSettleTime(?string $settleTime): self
    {
        $this->settleTime = $settleTime;
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
        if ($this->settleTime !== null) {
            $result['settle_time'] = $this->settleTime;
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
        if (($v = $data['settle_time'] ?? null) !== null) {
            $obj->settleTime = (string) $v;
        }
        return $obj;
    }
}
