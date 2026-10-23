<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInner implements \JsonSerializable
{
    /**
     * 标签代码
     * @var int
     */
    protected ?int $code = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagLevel
     */
    protected ?string $level = null;

    /**
     * 标签名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 子标签
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInnerSubTagsInner[]
     */
    protected ?array $subTags = null;

    /**
     * 标签代码
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * 标签代码
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagLevel
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagLevel $level
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * 标签名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 标签名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 子标签
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInnerSubTagsInner[]
     */
    public function getSubTags(): ?array
    {
        return $this->subTags;
    }

    /**
     * 子标签
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInnerSubTagsInner[] $subTags
     * @return self
     */
    public function setSubTags(?array $subTags): self
    {
        $this->subTags = $subTags;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->level !== null) {
            $result['level'] = $this->level;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subTags !== null) {
            $result['sub_tags'] = $this->subTags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sub_tags'] ?? null) !== null && is_array($v)) {
            $obj->subTags = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInnerSubTagsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
