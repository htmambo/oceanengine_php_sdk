<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CdpBrandGetV30ResponseDataBrandCategoryInfoInnerChildrenInnerChildrenInner implements \JsonSerializable
{
    /**
     * 三级类别id: yuntu_category_id
     * @var string
     */
    protected ?string $id = null;

    /**
     * 三级类别标签
     * @var string
     */
    protected ?string $lable = null;

    /**
     * 三级类别id: yuntu_category_id
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 三级类别id: yuntu_category_id
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 三级类别标签
     * @return string
     */
    public function getLable(): ?string
    {
        return $this->lable;
    }

    /**
     * 三级类别标签
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['lable'] ?? null) !== null) {
            $obj->lable = (string) $v;
        }
        return $obj;
    }
}
