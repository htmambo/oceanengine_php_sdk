<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectListGetV30ResponseDataListInnerRelatedProduct implements \JsonSerializable
{
    /**
     * 短剧专辑id
     * @var int
     */
    protected ?int $albumId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * 短剧专辑id
     * @return int
     */
    public function getAlbumId(): ?int
    {
        return $this->albumId;
    }

    /**
     * 短剧专辑id
     * @param int $albumId
     * @return self
     */
    public function setAlbumId(?int $albumId): self
    {
        $this->albumId = $albumId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->albumId !== null) {
            $result['album_id'] = $this->albumId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['album_id'] ?? null) !== null) {
            $obj->albumId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        return $obj;
    }
}
