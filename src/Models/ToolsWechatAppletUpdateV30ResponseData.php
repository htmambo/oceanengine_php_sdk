<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatAppletUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData
     */
    protected ?\Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData $data = null;

    /**
     * @return \Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = \Oceanengine\Models\ToolsWechatAppletUpdateV30ResponseDataData::fromArray($v);
        }
        return $obj;
    }
}
