<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandActionCategoryV30ResponseData implements \JsonSerializable
{
    /**
     * 兴趣列表
     * @var \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInner[]
     */
    protected ?array $actionCategoryList = null;

    /**
     * 兴趣列表
     * @return \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInner[]
     */
    public function getActionCategoryList(): ?array
    {
        return $this->actionCategoryList;
    }

    /**
     * 兴趣列表
     * @param \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInner[] $actionCategoryList
     * @return self
     */
    public function setActionCategoryList(?array $actionCategoryList): self
    {
        $this->actionCategoryList = $actionCategoryList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionCategoryList !== null) {
            $result['action_category_list'] = $this->actionCategoryList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_category_list'] ?? null) !== null && is_array($v)) {
            $obj->actionCategoryList = array_map(fn ($vv) => \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
