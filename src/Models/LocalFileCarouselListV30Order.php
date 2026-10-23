<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileCarouselListV30Order implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalFileCarouselListV30OrderOrderBy
     */
    protected ?string $orderBy = null;

    /**
     * @var \Oceanengine\Models\LocalFileCarouselListV30OrderOrderType
     */
    protected ?string $orderType = null;

    /**
     * @return \Oceanengine\Models\LocalFileCarouselListV30OrderOrderBy
     */
    public function getOrderBy(): ?string
    {
        return $this->orderBy;
    }

    /**
     * @param \Oceanengine\Models\LocalFileCarouselListV30OrderOrderBy $orderBy
     * @return self
     */
    public function setOrderBy(?string $orderBy): self
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileCarouselListV30OrderOrderType
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     * @param \Oceanengine\Models\LocalFileCarouselListV30OrderOrderType $orderType
     * @return self
     */
    public function setOrderType(?string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderBy !== null) {
            $result['order_by'] = $this->orderBy;
        }
        if ($this->orderType !== null) {
            $result['order_type'] = $this->orderType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_by'] ?? null) !== null) {
            $obj->orderBy = (string) $v;
        }
        if (($v = $data['order_type'] ?? null) !== null) {
            $obj->orderType = (string) $v;
        }
        return $obj;
    }
}
