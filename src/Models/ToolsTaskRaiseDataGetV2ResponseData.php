<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsTaskRaiseDataGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt
     */
    protected ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt $clickCnt = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt
     */
    protected ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt $convertCnt = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost
     */
    protected ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost $cost = null;

    /**
     * @var \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt
     */
    protected ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt $showCnt = null;

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt
     */
    public function getClickCnt(): ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt
    {
        return $this->clickCnt;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt $clickCnt
     * @return self
     */
    public function setClickCnt(?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt
     */
    public function getConvertCnt(): ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt
    {
        return $this->convertCnt;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt $convertCnt
     * @return self
     */
    public function setConvertCnt(?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost
     */
    public function getCost(): ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost
    {
        return $this->cost;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost $cost
     * @return self
     */
    public function setCost(?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt
     */
    public function getShowCnt(): ?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt
    {
        return $this->showCnt;
    }

    /**
     * @param \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt $showCnt
     * @return self
     */
    public function setShowCnt(?\Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null && is_array($v)) {
            $obj->clickCnt = \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataClickCnt::fromArray($v);
        }
        if (($v = $data['convert_cnt'] ?? null) !== null && is_array($v)) {
            $obj->convertCnt = \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataConvertCnt::fromArray($v);
        }
        if (($v = $data['cost'] ?? null) !== null && is_array($v)) {
            $obj->cost = \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataCost::fromArray($v);
        }
        if (($v = $data['show_cnt'] ?? null) !== null && is_array($v)) {
            $obj->showCnt = \Oceanengine\Models\ToolsTaskRaiseDataGetV2ResponseDataShowCnt::fromArray($v);
        }
        return $obj;
    }
}
