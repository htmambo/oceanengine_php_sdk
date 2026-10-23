<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class InvoiceTicketListV30ResponseData implements \JsonSerializable
{
    /**
     * 分页ID
     * @var string
     */
    protected ?string $scrollId = null;

    /**
     * 账单列表
     * @var \Oceanengine\Models\InvoiceTicketListV30ResponseDataTicketListInner[]
     */
    protected ?array $ticketList = null;

    /**
     * 分页ID
     * @return string
     */
    public function getScrollId(): ?string
    {
        return $this->scrollId;
    }

    /**
     * 分页ID
     * @param string $scrollId
     * @return self
     */
    public function setScrollId(?string $scrollId): self
    {
        $this->scrollId = $scrollId;
        return $this;
    }

    /**
     * 账单列表
     * @return \Oceanengine\Models\InvoiceTicketListV30ResponseDataTicketListInner[]
     */
    public function getTicketList(): ?array
    {
        return $this->ticketList;
    }

    /**
     * 账单列表
     * @param \Oceanengine\Models\InvoiceTicketListV30ResponseDataTicketListInner[] $ticketList
     * @return self
     */
    public function setTicketList(?array $ticketList): self
    {
        $this->ticketList = $ticketList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->scrollId !== null) {
            $result['scroll_id'] = $this->scrollId;
        }
        if ($this->ticketList !== null) {
            $result['ticket_list'] = $this->ticketList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['scroll_id'] ?? null) !== null) {
            $obj->scrollId = (string) $v;
        }
        if (($v = $data['ticket_list'] ?? null) !== null && is_array($v)) {
            $obj->ticketList = array_map(fn ($vv) => \Oceanengine\Models\InvoiceTicketListV30ResponseDataTicketListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
