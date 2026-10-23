<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInner[]
     */
    protected ?array $params = null;

    /**
     * @var string
     */
    protected ?string $tool = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInner[]
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInner[] $params
     * @return self
     */
    public function setParams(?array $params): self
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return string
     */
    public function getTool(): ?string
    {
        return $this->tool;
    }

    /**
     * @param string $tool
     * @return self
     */
    public function setTool(?string $tool): self
    {
        $this->tool = $tool;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->params !== null) {
            $result['params'] = $this->params;
        }
        if ($this->tool !== null) {
            $result['tool'] = $this->tool;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['params'] ?? null) !== null && is_array($v)) {
            $obj->params = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInner::fromArray($vv), $v);
        }
        if (($v = $data['tool'] ?? null) !== null) {
            $obj->tool = (string) $v;
        }
        return $obj;
    }
}
