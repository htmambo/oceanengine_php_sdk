<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundInfoQueryV2ResponseData implements \JsonSerializable
{
    /**
     * 返款信息
     * @var \Oceanengine\Models\ToolsClueRefundInfoQueryV2ResponseDataInfoInner[]
     */
    protected ?array $info = null;

    /**
     * 返款信息
     * @return \Oceanengine\Models\ToolsClueRefundInfoQueryV2ResponseDataInfoInner[]
     */
    public function getInfo(): ?array
    {
        return $this->info;
    }

    /**
     * 返款信息
     * @param \Oceanengine\Models\ToolsClueRefundInfoQueryV2ResponseDataInfoInner[] $info
     * @return self
     */
    public function setInfo(?array $info): self
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->info !== null) {
            $result['info'] = $this->info;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['info'] ?? null) !== null && is_array($v)) {
            $obj->info = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRefundInfoQueryV2ResponseDataInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
