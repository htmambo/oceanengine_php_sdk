<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductDetailGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var string[]
     */
    protected ?array $city = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var string
     */
    protected ?string $firstCategory = null;

    /**
     * @var bool
     */
    protected ?bool $hasVideo = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $offlineTime = null;

    /**
     * @var string
     */
    protected ?string $onlineTime = null;

    /**
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $subCategory = null;

    /**
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * @var string
     */
    protected ?string $thirdCategory = null;

    /**
     * @var string
     */
    protected ?string $title = null;

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
     * @return string[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param string[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstCategory(): ?string
    {
        return $this->firstCategory;
    }

    /**
     * @param string $firstCategory
     * @return self
     */
    public function setFirstCategory(?string $firstCategory): self
    {
        $this->firstCategory = $firstCategory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasVideo(): ?bool
    {
        return $this->hasVideo;
    }

    /**
     * @param bool $hasVideo
     * @return self
     */
    public function setHasVideo(?bool $hasVideo): self
    {
        $this->hasVideo = $hasVideo;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfflineTime(): ?string
    {
        return $this->offlineTime;
    }

    /**
     * @param string $offlineTime
     * @return self
     */
    public function setOfflineTime(?string $offlineTime): self
    {
        $this->offlineTime = $offlineTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnlineTime(): ?string
    {
        return $this->onlineTime;
    }

    /**
     * @param string $onlineTime
     * @return self
     */
    public function setOnlineTime(?string $onlineTime): self
    {
        $this->onlineTime = $onlineTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
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
     * @return string
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    /**
     * @param string $subCategory
     * @return self
     */
    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdCategory(): ?string
    {
        return $this->thirdCategory;
    }

    /**
     * @param string $thirdCategory
     * @return self
     */
    public function setThirdCategory(?string $thirdCategory): self
    {
        $this->thirdCategory = $thirdCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->firstCategory !== null) {
            $result['first_category'] = $this->firstCategory;
        }
        if ($this->hasVideo !== null) {
            $result['has_video'] = $this->hasVideo;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->offlineTime !== null) {
            $result['offline_time'] = $this->offlineTime;
        }
        if ($this->onlineTime !== null) {
            $result['online_time'] = $this->onlineTime;
        }
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->subCategory !== null) {
            $result['sub_category'] = $this->subCategory;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->thirdCategory !== null) {
            $result['third_category'] = $this->thirdCategory;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['first_category'] ?? null) !== null) {
            $obj->firstCategory = (string) $v;
        }
        if (($v = $data['has_video'] ?? null) !== null) {
            $obj->hasVideo = (bool) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['offline_time'] ?? null) !== null) {
            $obj->offlineTime = (string) $v;
        }
        if (($v = $data['online_time'] ?? null) !== null) {
            $obj->onlineTime = (string) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['sub_category'] ?? null) !== null) {
            $obj->subCategory = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['third_category'] ?? null) !== null) {
            $obj->thirdCategory = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
