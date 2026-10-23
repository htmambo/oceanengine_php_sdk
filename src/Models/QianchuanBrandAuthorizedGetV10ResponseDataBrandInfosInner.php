<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanBrandAuthorizedGetV10ResponseDataBrandInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var string
     */
    protected ?string $brandLogo = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

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
    public function getBrandLogo(): ?string
    {
        return $this->brandLogo;
    }

    /**
     * @param string $brandLogo
     * @return self
     */
    public function setBrandLogo(?string $brandLogo): self
    {
        $this->brandLogo = $brandLogo;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandLogo !== null) {
            $result['brand_logo'] = $this->brandLogo;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['brand_logo'] ?? null) !== null) {
            $obj->brandLogo = (string) $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        return $obj;
    }
}
