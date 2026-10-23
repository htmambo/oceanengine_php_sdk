<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditSendV2ResponseData implements \JsonSerializable
{
    /**
     * 前置预审送审结果列表
     * @var \Oceanengine\Models\ToolsPreAuditSendV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 前置预审送审结果列表
     * @return \Oceanengine\Models\ToolsPreAuditSendV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 前置预审送审结果列表
     * @param \Oceanengine\Models\ToolsPreAuditSendV2ResponseDataListInner[] $list
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsPreAuditSendV2ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
