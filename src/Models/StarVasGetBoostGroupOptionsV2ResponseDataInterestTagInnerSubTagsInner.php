<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostGroupOptionsV2ResponseDataInterestTagInnerSubTagsInner implements \JsonSerializable
{
    /**
     * 标签代码
     * @var int
     */
    protected ?int $code = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel
     */
    protected ?string $level = null;

    /**
     * 标签名称
     * @var string
     */
    protected ?string $name = null;

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
     * @return \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostGroupOptionsV2DataInterestTagSubTagsLevel $level
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
        return $obj;
    }
}
