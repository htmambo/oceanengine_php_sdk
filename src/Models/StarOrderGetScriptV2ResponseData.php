<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetScriptV2ResponseData implements \JsonSerializable
{
    /**
     * 任务脚本信息
     * @var \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInner[]
     */
    protected ?array $orderScriptList = null;

    /**
     * 任务脚本信息
     * @return \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInner[]
     */
    public function getOrderScriptList(): ?array
    {
        return $this->orderScriptList;
    }

    /**
     * 任务脚本信息
     * @param \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInner[] $orderScriptList
     * @return self
     */
    public function setOrderScriptList(?array $orderScriptList): self
    {
        $this->orderScriptList = $orderScriptList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderScriptList !== null) {
            $result['order_script_list'] = $this->orderScriptList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_script_list'] ?? null) !== null && is_array($v)) {
            $obj->orderScriptList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
