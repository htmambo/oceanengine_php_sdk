<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCustomAudienceListV30ResponseDataAudiencePackageListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCustomAudienceListV30DataAudiencePackageListCategory
     */
    protected ?string $category = null;

    /**
     * 过期时间
     * @var int
     */
    protected ?int $expireTime = null;

    /**
     * 人群包ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 人群包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return \Oceanengine\Models\BrandCustomAudienceListV30DataAudiencePackageListCategory
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param \Oceanengine\Models\BrandCustomAudienceListV30DataAudiencePackageListCategory $category
     * @return self
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * 过期时间
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * 过期时间
     * @param int $expireTime
     * @return self
     */
    public function setExpireTime(?int $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * 人群包ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 人群包ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 人群包名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 人群包名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category'] ?? null) !== null) {
            $obj->category = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
