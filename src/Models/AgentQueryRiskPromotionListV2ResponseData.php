<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentQueryRiskPromotionListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo
     */
    protected ?\Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo $cursorInfo = null;

    /**
     * 违规广告列表
     * @var \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo
     */
    public function getCursorInfo(): ?\Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo
    {
        return $this->cursorInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo $cursorInfo
     * @return self
     */
    public function setCursorInfo(?\Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo $cursorInfo): self
    {
        $this->cursorInfo = $cursorInfo;
        return $this;
    }

    /**
     * 违规广告列表
     * @return \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 违规广告列表
     * @param \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
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
        if ($this->cursorInfo !== null) {
            $result['cursor_info'] = $this->cursorInfo;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cursor_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorInfo = \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataCursorInfo::fromArray($v);
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\AgentQueryRiskPromotionListV2ResponseDataDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
