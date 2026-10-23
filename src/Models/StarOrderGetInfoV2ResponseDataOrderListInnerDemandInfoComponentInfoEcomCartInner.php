<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfoComponentInfoEcomCartInner implements \JsonSerializable
{
    /**
     * 商品链接
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * 商品标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 商品链接
     * @return string
     */
    public function getProductLink(): ?string
    {
        return $this->productLink;
    }

    /**
     * 商品链接
     * @param string $productLink
     * @return self
     */
    public function setProductLink(?string $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }

    /**
     * 商品标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 商品标题
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
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
