<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsForbiddenLinkGreyGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $forbiddenDate = null;

    /**
     * 是否命中禁投线索名单 true表示命中，但命中不代表立即禁投，请结合forbidden_date字段判断当前是否可投 false表示未命中
     * @var bool
     */
    protected ?bool $inForbiddenList = null;

    /**
     * @return string
     */
    public function getForbiddenDate(): ?string
    {
        return $this->forbiddenDate;
    }

    /**
     * @param string $forbiddenDate
     * @return self
     */
    public function setForbiddenDate(?string $forbiddenDate): self
    {
        $this->forbiddenDate = $forbiddenDate;
        return $this;
    }

    /**
     * 是否命中禁投线索名单 true表示命中，但命中不代表立即禁投，请结合forbidden_date字段判断当前是否可投 false表示未命中
     * @return bool
     */
    public function getInForbiddenList(): ?bool
    {
        return $this->inForbiddenList;
    }

    /**
     * 是否命中禁投线索名单 true表示命中，但命中不代表立即禁投，请结合forbidden_date字段判断当前是否可投 false表示未命中
     * @param bool $inForbiddenList
     * @return self
     */
    public function setInForbiddenList(?bool $inForbiddenList): self
    {
        $this->inForbiddenList = $inForbiddenList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->forbiddenDate !== null) {
            $result['forbidden_date'] = $this->forbiddenDate;
        }
        if ($this->inForbiddenList !== null) {
            $result['in_forbidden_list'] = $this->inForbiddenList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['forbidden_date'] ?? null) !== null) {
            $obj->forbiddenDate = (string) $v;
        }
        if (($v = $data['in_forbidden_list'] ?? null) !== null) {
            $obj->inForbiddenList = (bool) $v;
        }
        return $obj;
    }
}
