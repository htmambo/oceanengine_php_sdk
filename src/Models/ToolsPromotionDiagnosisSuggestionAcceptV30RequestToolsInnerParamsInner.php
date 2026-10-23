<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $paramName = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue
     */
    protected ?\Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue $paramValue = null;

    /**
     * @return string
     */
    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    /**
     * @param string $paramName
     * @return self
     */
    public function setParamName(?string $paramName): self
    {
        $this->paramName = $paramName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue
     */
    public function getParamValue(): ?\Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue
    {
        return $this->paramValue;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue $paramValue
     * @return self
     */
    public function setParamValue(?\Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue $paramValue): self
    {
        $this->paramValue = $paramValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->paramName !== null) {
            $result['param_name'] = $this->paramName;
        }
        if ($this->paramValue !== null) {
            $result['param_value'] = $this->paramValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['param_name'] ?? null) !== null) {
            $obj->paramName = (string) $v;
        }
        if (($v = $data['param_value'] ?? null) !== null && is_array($v)) {
            $obj->paramValue = \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInnerParamsInnerParamValue::fromArray($v);
        }
        return $obj;
    }
}
