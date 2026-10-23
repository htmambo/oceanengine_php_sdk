<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallSuggestRoiGetV10ProductId2AwemeUidInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $awemeUids = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return int[]
     */
    public function getAwemeUids(): ?array
    {
        return $this->awemeUids;
    }

    /**
     * @param int[] $awemeUids
     * @return self
     */
    public function setAwemeUids(?array $awemeUids): self
    {
        $this->awemeUids = $awemeUids;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeUids !== null) {
            $result['aweme_uids'] = $this->awemeUids;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_uids'] ?? null) !== null && is_array($v)) {
            $obj->awemeUids = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
