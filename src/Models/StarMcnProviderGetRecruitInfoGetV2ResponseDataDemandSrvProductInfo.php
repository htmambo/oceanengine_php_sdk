<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetRecruitInfoGetV2ResponseDataDemandSrvProductInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        return $obj;
    }
}
