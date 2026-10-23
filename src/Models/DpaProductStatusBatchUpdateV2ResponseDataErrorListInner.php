<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductStatusBatchUpdateV2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 失败原因
     * @var string
     */
    protected ?string $errorMsg = null;

    /**
     * 修改失败的商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 失败原因
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * 失败原因
     * @param string $errorMsg
     * @return self
     */
    public function setErrorMsg(?string $errorMsg): self
    {
        $this->errorMsg = $errorMsg;
        return $this;
    }

    /**
     * 修改失败的商品id
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 修改失败的商品id
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
        if ($this->errorMsg !== null) {
            $result['error_msg'] = $this->errorMsg;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_msg'] ?? null) !== null) {
            $obj->errorMsg = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
