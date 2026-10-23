<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoGetV2ResponseData implements \JsonSerializable
{
    /**
     * 列表
     * @var \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 列表
     * @return \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 列表
     * @param \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
