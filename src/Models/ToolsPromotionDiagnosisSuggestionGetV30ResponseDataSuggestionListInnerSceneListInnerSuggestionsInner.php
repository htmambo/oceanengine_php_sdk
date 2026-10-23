<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $conclusion = null;

    /**
     * @var string
     */
    protected ?string $msg = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $sceneType = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType
     */
    protected ?string $toolType = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInnerToolsInner[]
     */
    protected ?array $tools = null;

    /**
     * @return string
     */
    public function getConclusion(): ?string
    {
        return $this->conclusion;
    }

    /**
     * @param string $conclusion
     * @return self
     */
    public function setConclusion(?string $conclusion): self
    {
        $this->conclusion = $conclusion;
        return $this;
    }

    /**
     * @return string
     */
    public function getMsg(): ?string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     * @return self
     */
    public function setMsg(?string $msg): self
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSceneType(): ?string
    {
        return $this->sceneType;
    }

    /**
     * @param string $sceneType
     * @return self
     */
    public function setSceneType(?string $sceneType): self
    {
        $this->sceneType = $sceneType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType
     */
    public function getToolType(): ?string
    {
        return $this->toolType;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListSuggestionsToolType $toolType
     * @return self
     */
    public function setToolType(?string $toolType): self
    {
        $this->toolType = $toolType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInnerToolsInner[]
     */
    public function getTools(): ?array
    {
        return $this->tools;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInnerToolsInner[] $tools
     * @return self
     */
    public function setTools(?array $tools): self
    {
        $this->tools = $tools;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->conclusion !== null) {
            $result['conclusion'] = $this->conclusion;
        }
        if ($this->msg !== null) {
            $result['msg'] = $this->msg;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->sceneType !== null) {
            $result['scene_type'] = $this->sceneType;
        }
        if ($this->toolType !== null) {
            $result['tool_type'] = $this->toolType;
        }
        if ($this->tools !== null) {
            $result['tools'] = $this->tools;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['conclusion'] ?? null) !== null) {
            $obj->conclusion = (string) $v;
        }
        if (($v = $data['msg'] ?? null) !== null) {
            $obj->msg = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['scene_type'] ?? null) !== null) {
            $obj->sceneType = (string) $v;
        }
        if (($v = $data['tool_type'] ?? null) !== null) {
            $obj->toolType = (string) $v;
        }
        if (($v = $data['tools'] ?? null) !== null && is_array($v)) {
            $obj->tools = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInnerToolsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
