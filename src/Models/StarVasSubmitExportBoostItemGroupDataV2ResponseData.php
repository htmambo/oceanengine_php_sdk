<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasSubmitExportBoostItemGroupDataV2ResponseData implements \JsonSerializable
{
    /**
     * 导出任务唯一标识
     * @var int
     */
    protected ?int $ticketId = null;

    /**
     * 导出任务唯一标识
     * @return int
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }

    /**
     * 导出任务唯一标识
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
        if ($this->ticketId !== null) {
            $result['ticket_id'] = $this->ticketId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ticket_id'] ?? null) !== null) {
            $obj->ticketId = (int) $v;
        }
        return $obj;
    }
}
