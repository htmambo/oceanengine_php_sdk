<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CdpBrandGetV30ResponseDataBrandInfoDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $brandNameId = null;

    /**
     * @var int
     */
    protected ?int $cdpBrandId = null;

    /**
     * @var string
     */
    protected ?string $cdpBrandName = null;

    /**
     * @var int
     */
    protected ?int $ecomBrandId = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $subBrandMap = null;

    /**
     * @return int
     */
    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }

    /**
     * @param int $brandNameId
     * @return self
     */
    public function setBrandNameId(?int $brandNameId): self
    {
        $this->brandNameId = $brandNameId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCdpBrandId(): ?int
    {
        return $this->cdpBrandId;
    }

    /**
     * @param int $cdpBrandId
     * @return self
     */
    public function setCdpBrandId(?int $cdpBrandId): self
    {
        $this->cdpBrandId = $cdpBrandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCdpBrandName(): ?string
    {
        return $this->cdpBrandName;
    }

    /**
     * @param string $cdpBrandName
     * @return self
     */
    public function setCdpBrandName(?string $cdpBrandName): self
    {
        $this->cdpBrandName = $cdpBrandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getEcomBrandId(): ?int
    {
        return $this->ecomBrandId;
    }

    /**
     * @param int $ecomBrandId
     * @return self
     */
    public function setEcomBrandId(?int $ecomBrandId): self
    {
        $this->ecomBrandId = $ecomBrandId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getSubBrandMap(): ?array
    {
        return $this->subBrandMap;
    }

    /**
     * @param array<string,mixed> $subBrandMap
     * @return self
     */
    public function setSubBrandMap(?array $subBrandMap): self
    {
        $this->subBrandMap = $subBrandMap;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandNameId !== null) {
            $result['brand_name_id'] = $this->brandNameId;
        }
        if ($this->cdpBrandId !== null) {
            $result['cdp_brand_id'] = $this->cdpBrandId;
        }
        if ($this->cdpBrandName !== null) {
            $result['cdp_brand_name'] = $this->cdpBrandName;
        }
        if ($this->ecomBrandId !== null) {
            $result['ecom_brand_id'] = $this->ecomBrandId;
        }
        if ($this->subBrandMap !== null) {
            $result['sub_brand_map'] = $this->subBrandMap;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name_id'] ?? null) !== null) {
            $obj->brandNameId = (int) $v;
        }
        if (($v = $data['cdp_brand_id'] ?? null) !== null) {
            $obj->cdpBrandId = (int) $v;
        }
        if (($v = $data['cdp_brand_name'] ?? null) !== null) {
            $obj->cdpBrandName = (string) $v;
        }
        if (($v = $data['ecom_brand_id'] ?? null) !== null) {
            $obj->ecomBrandId = (int) $v;
        }
        if (($v = $data['sub_brand_map'] ?? null) !== null && is_array($v)) {
            $obj->subBrandMap = $v;
        }
        return $obj;
    }
}
