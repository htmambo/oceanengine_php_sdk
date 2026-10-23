<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductDeleteV2ResponseDataData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaClueProductDeleteV2ResponseDataDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @return \Oceanengine\Models\DpaClueProductDeleteV2ResponseDataDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\DpaClueProductDeleteV2ResponseDataDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\DpaClueProductDeleteV2ResponseDataDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        return $obj;
    }
}
