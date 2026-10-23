<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceApplyOrderCreateV30RequestTicketInfosInner implements \JsonSerializable
{
    /**
     * 账单申请开票金额，单位为分（即实际金额*100）
     * @var int
     */
    protected ?int $applyAmount = null;

    /**
     * 账单ID
     * @var int
     */
    protected ?int $ticketId = null;

    /**
     * 账单申请开票金额，单位为分（即实际金额*100）
     * @return int
     */
    public function getApplyAmount(): ?int
    {
        return $this->applyAmount;
    }

    /**
     * 账单申请开票金额，单位为分（即实际金额*100）
     * @param int $applyAmount
     * @return self
     */
    public function setApplyAmount(?int $applyAmount): self
    {
        $this->applyAmount = $applyAmount;
        return $this;
    }

    /**
     * 账单ID
     * @return int
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }

    /**
     * 账单ID
     * @param int $ticketId
     * @return self
     */
    public function setTicketId(?int $ticketId): self
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyAmount !== null) {
            $result['apply_amount'] = $this->applyAmount;
        }
        if ($this->ticketId !== null) {
            $result['ticket_id'] = $this->ticketId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_amount'] ?? null) !== null) {
            $obj->applyAmount = (int) $v;
        }
        if (($v = $data['ticket_id'] ?? null) !== null) {
            $obj->ticketId = (int) $v;
        }
        return $obj;
    }
}
