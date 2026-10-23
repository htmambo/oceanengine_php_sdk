<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeStrategyListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 策略列表
     * @var \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInner[]
     */
    protected ?array $strategyModels = null;

    /**
     * @return \Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 策略列表
     * @return \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInner[]
     */
    public function getStrategyModels(): ?array
    {
        return $this->strategyModels;
    }

    /**
     * 策略列表
     * @param \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInner[] $strategyModels
     * @return self
     */
    public function setStrategyModels(?array $strategyModels): self
    {
        $this->strategyModels = $strategyModels;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->strategyModels !== null) {
            $result['strategy_models'] = $this->strategyModels;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\CreativeStrategyListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['strategy_models'] ?? null) !== null && is_array($v)) {
            $obj->strategyModels = array_map(fn ($vv) => \Oceanengine\Models\CreativeStrategyListV2ResponseDataStrategyModelsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
