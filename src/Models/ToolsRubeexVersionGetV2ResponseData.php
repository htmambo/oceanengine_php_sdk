<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRubeexVersionGetV2ResponseData implements \JsonSerializable
{
    /**
     * 历史版本列表
     * @var \Oceanengine\Models\ToolsRubeexVersionGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 历史版本列表
     * @return \Oceanengine\Models\ToolsRubeexVersionGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 历史版本列表
     * @param \Oceanengine\Models\ToolsRubeexVersionGetV2ResponseDataListInner[] $list
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsRubeexVersionGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
