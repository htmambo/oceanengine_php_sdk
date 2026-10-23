<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInnerToolsInnerParamsInnerParamValue implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $booleanParam = null;

    /**
     * @var string[]
     */
    protected ?array $listParam = null;

    /**
     * @var array<string,string>[]
     */
    protected ?array $objectListParam = null;

    /**
     * @var string
     */
    protected ?string $stringParam = null;

    /**
     * @return bool
     */
    public function getBooleanParam(): ?bool
    {
        return $this->booleanParam;
    }

    /**
     * @param bool $booleanParam
     * @return self
     */
    public function setBooleanParam(?bool $booleanParam): self
    {
        $this->booleanParam = $booleanParam;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getListParam(): ?array
    {
        return $this->listParam;
    }

    /**
     * @param string[] $listParam
     * @return self
     */
    public function setListParam(?array $listParam): self
    {
        $this->listParam = $listParam;
        return $this;
    }

    /**
     * @return array<string,string>[]
     */
    public function getObjectListParam(): ?array
    {
        return $this->objectListParam;
    }

    /**
     * @param array<string,string>[] $objectListParam
     * @return self
     */
    public function setObjectListParam(?array $objectListParam): self
    {
        $this->objectListParam = $objectListParam;
        return $this;
    }

    /**
     * @return string
     */
    public function getStringParam(): ?string
    {
        return $this->stringParam;
    }

    /**
     * @param string $stringParam
     * @return self
     */
    public function setStringParam(?string $stringParam): self
    {
        $this->stringParam = $stringParam;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->booleanParam !== null) {
            $result['boolean_param'] = $this->booleanParam;
        }
        if ($this->listParam !== null) {
            $result['list_param'] = $this->listParam;
        }
        if ($this->objectListParam !== null) {
            $result['object_list_param'] = $this->objectListParam;
        }
        if ($this->stringParam !== null) {
            $result['string_param'] = $this->stringParam;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['boolean_param'] ?? null) !== null) {
            $obj->booleanParam = (bool) $v;
        }
        if (($v = $data['list_param'] ?? null) !== null && is_array($v)) {
            $obj->listParam = $v;
        }
        if (($v = $data['object_list_param'] ?? null) !== null && is_array($v)) {
            $obj->objectListParam = $v;
        }
        if (($v = $data['string_param'] ?? null) !== null) {
            $obj->stringParam = (string) $v;
        }
        return $obj;
    }
}
