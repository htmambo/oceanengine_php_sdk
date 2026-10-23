<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetailSubBrandDetailsInner implements \JsonSerializable
{
    /**
     * 云图子品牌名称
     * @var string
     */
    protected ?string $brandFullName = null;

    /**
     * 云图子品牌id
     * @var int
     */
    protected ?int $outerBrandId = null;

    /**
     * 云图子品牌名称
     * @return string
     */
    public function getBrandFullName(): ?string
    {
        return $this->brandFullName;
    }

    /**
     * 云图子品牌名称
     * @param string $brandFullName
     * @return self
     */
    public function setBrandFullName(?string $brandFullName): self
    {
        $this->brandFullName = $brandFullName;
        return $this;
    }

    /**
     * 云图子品牌id
     * @return int
     */
    public function getOuterBrandId(): ?int
    {
        return $this->outerBrandId;
    }

    /**
     * 云图子品牌id
     * @param int $outerBrandId
     * @return self
     */
    public function setOuterBrandId(?int $outerBrandId): self
    {
        $this->outerBrandId = $outerBrandId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandFullName !== null) {
            $result['brand_full_name'] = $this->brandFullName;
        }
        if ($this->outerBrandId !== null) {
            $result['outer_brand_id'] = $this->outerBrandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_full_name'] ?? null) !== null) {
            $obj->brandFullName = (string) $v;
        }
        if (($v = $data['outer_brand_id'] ?? null) !== null) {
            $obj->outerBrandId = (int) $v;
        }
        return $obj;
    }
}
