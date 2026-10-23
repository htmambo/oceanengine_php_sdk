<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListProductInfo implements \JsonSerializable
{
    /**
     * 产品主图，取值来源【获取图片素材】，上限10
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * 产品卖点，字数[6-9]，上限10
     * @var string[]
     */
    protected ?array $sellingPoints = null;

    /**
     * 产品名称，字数[1-20]，上限1
     * @var string[]
     */
    protected ?array $titles = null;

    /**
     * 产品主图，取值来源【获取图片素材】，上限10
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * 产品主图，取值来源【获取图片素材】，上限10
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * 产品卖点，字数[6-9]，上限10
     * @return string[]
     */
    public function getSellingPoints(): ?array
    {
        return $this->sellingPoints;
    }

    /**
     * 产品卖点，字数[6-9]，上限10
     * @param string[] $sellingPoints
     * @return self
     */
    public function setSellingPoints(?array $sellingPoints): self
    {
        $this->sellingPoints = $sellingPoints;
        return $this;
    }

    /**
     * 产品名称，字数[1-20]，上限1
     * @return string[]
     */
    public function getTitles(): ?array
    {
        return $this->titles;
    }

    /**
     * 产品名称，字数[1-20]，上限1
     * @param string[] $titles
     * @return self
     */
    public function setTitles(?array $titles): self
    {
        $this->titles = $titles;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->sellingPoints !== null) {
            $result['selling_points'] = $this->sellingPoints;
        }
        if ($this->titles !== null) {
            $result['titles'] = $this->titles;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['selling_points'] ?? null) !== null && is_array($v)) {
            $obj->sellingPoints = $v;
        }
        if (($v = $data['titles'] ?? null) !== null && is_array($v)) {
            $obj->titles = $v;
        }
        return $obj;
    }
}
