<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 起量信息
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInner[]
     */
    protected ?array $raiseInfo = null;

    /**
     * 起量信息
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInner[]
     */
    public function getRaiseInfo(): ?array
    {
        return $this->raiseInfo;
    }

    /**
     * 起量信息
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInner[] $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?array $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionRaiseStatusGetV30ResponseDataListInnerRaiseInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
