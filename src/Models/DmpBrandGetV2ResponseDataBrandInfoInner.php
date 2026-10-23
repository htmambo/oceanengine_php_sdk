<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpBrandGetV2ResponseDataBrandInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var int
     */
    protected ?int $virtualAdvId = null;

    /**
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getVirtualAdvId(): ?int
    {
        return $this->virtualAdvId;
    }

    /**
     * @param int $virtualAdvId
     * @return self
     */
    public function setVirtualAdvId(?int $virtualAdvId): self
    {
        $this->virtualAdvId = $virtualAdvId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->virtualAdvId !== null) {
            $result['virtual_adv_id'] = $this->virtualAdvId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['virtual_adv_id'] ?? null) !== null) {
            $obj->virtualAdvId = (int) $v;
        }
        return $obj;
    }
}
