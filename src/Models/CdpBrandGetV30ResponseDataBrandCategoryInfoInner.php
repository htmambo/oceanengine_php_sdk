<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CdpBrandGetV30ResponseDataBrandCategoryInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * 一级类别id: yuntu_category_id
     * @var string
     */
    protected ?string $id = null;

    /**
     * 一级类别标签
     * @var string
     */
    protected ?string $lable = null;

    /**
     * @return \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

    /**
     * 一级类别id: yuntu_category_id
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 一级类别id: yuntu_category_id
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 一级类别标签
     * @return string
     */
    public function getLable(): ?string
    {
        return $this->lable;
    }

    /**
     * 一级类别标签
     * @param string $lable
     * @return self
     */
    public function setLable(?string $lable): self
    {
        $this->lable = $lable;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->children !== null) {
            $result['children'] = $this->children;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->lable !== null) {
            $result['lable'] = $this->lable;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInnerChildrenInner::fromArray($vv), $v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['lable'] ?? null) !== null) {
            $obj->lable = (string) $v;
        }
        return $obj;
    }
}
