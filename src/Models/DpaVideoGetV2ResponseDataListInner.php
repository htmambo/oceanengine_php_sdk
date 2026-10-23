<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaVideoGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo
     */
    protected ?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo $imageInfo = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo
     */
    protected ?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo $videoInfo = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
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
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
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
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerImageInfo::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\DpaVideoGetV2ResponseDataListInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
