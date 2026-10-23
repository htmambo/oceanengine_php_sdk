<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInnerAuthorOrderInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $authorOrderStatus = null;

    /**
     * @return int
     */
    public function getAuthorOrderStatus(): ?int
    {
        return $this->authorOrderStatus;
    }

    /**
     * @param int $authorOrderStatus
     * @return self
     */
    public function setAuthorOrderStatus(?int $authorOrderStatus): self
    {
        $this->authorOrderStatus = $authorOrderStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorOrderStatus !== null) {
            $result['author_order_status'] = $this->authorOrderStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_order_status'] ?? null) !== null) {
            $obj->authorOrderStatus = (int) $v;
        }
        return $obj;
    }
}
