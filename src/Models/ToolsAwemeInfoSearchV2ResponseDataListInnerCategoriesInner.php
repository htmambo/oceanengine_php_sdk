<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * @var string
     */
    protected ?string $coverNumStr = null;

    /**
     * @var string
     */
    protected ?string $fansNumStr = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverNumStr(): ?string
    {
        return $this->coverNumStr;
    }

    /**
     * @param string $coverNumStr
     * @return self
     */
    public function setCoverNumStr(?string $coverNumStr): self
    {
        $this->coverNumStr = $coverNumStr;
        return $this;
    }

    /**
     * @return string
     */
    public function getFansNumStr(): ?string
    {
        return $this->fansNumStr;
    }

    /**
     * @param string $fansNumStr
     * @return self
     */
    public function setFansNumStr(?string $fansNumStr): self
    {
        $this->fansNumStr = $fansNumStr;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
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
        if ($this->coverNumStr !== null) {
            $result['cover_num_str'] = $this->coverNumStr;
        }
        if ($this->fansNumStr !== null) {
            $result['fans_num_str'] = $this->fansNumStr;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInnerChildrenInner::fromArray($vv), $v);
        }
        if (($v = $data['cover_num_str'] ?? null) !== null) {
            $obj->coverNumStr = (string) $v;
        }
        if (($v = $data['fans_num_str'] ?? null) !== null) {
            $obj->fansNumStr = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
