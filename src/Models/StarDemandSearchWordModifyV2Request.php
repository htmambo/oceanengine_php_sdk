<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandSearchWordModifyV2Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $newSearchWord = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return string
     */
    public function getNewSearchWord(): ?string
    {
        return $this->newSearchWord;
    }

    /**
     * @param string $newSearchWord
     * @return self
     */
    public function setNewSearchWord(?string $newSearchWord): self
    {
        $this->newSearchWord = $newSearchWord;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->newSearchWord !== null) {
            $result['new_search_word'] = $this->newSearchWord;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['new_search_word'] ?? null) !== null) {
            $obj->newSearchWord = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
