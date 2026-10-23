<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $warning = null;

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
     * @return string
     */
    public function getWarning(): ?string
    {
        return $this->warning;
    }

    /**
     * @param string $warning
     * @return self
     */
    public function setWarning(?string $warning): self
    {
        $this->warning = $warning;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->warning !== null) {
            $result['warning'] = $this->warning;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['warning'] ?? null) !== null) {
            $obj->warning = (string) $v;
        }
        return $obj;
    }
}
