<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInnerRecSuggestionToolsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $recSuggestionTool = null;

    /**
     * @var string
     */
    protected ?string $recSuggestionToolStr = null;

    /**
     * @var string
     */
    protected ?string $toolParams = null;

    /**
     * @return int
     */
    public function getRecSuggestionTool(): ?int
    {
        return $this->recSuggestionTool;
    }

    /**
     * @param int $recSuggestionTool
     * @return self
     */
    public function setRecSuggestionTool(?int $recSuggestionTool): self
    {
        $this->recSuggestionTool = $recSuggestionTool;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecSuggestionToolStr(): ?string
    {
        return $this->recSuggestionToolStr;
    }

    /**
     * @param string $recSuggestionToolStr
     * @return self
     */
    public function setRecSuggestionToolStr(?string $recSuggestionToolStr): self
    {
        $this->recSuggestionToolStr = $recSuggestionToolStr;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolParams(): ?string
    {
        return $this->toolParams;
    }

    /**
     * @param string $toolParams
     * @return self
     */
    public function setToolParams(?string $toolParams): self
    {
        $this->toolParams = $toolParams;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->recSuggestionTool !== null) {
            $result['rec_suggestion_tool'] = $this->recSuggestionTool;
        }
        if ($this->recSuggestionToolStr !== null) {
            $result['rec_suggestion_tool_str'] = $this->recSuggestionToolStr;
        }
        if ($this->toolParams !== null) {
            $result['tool_params'] = $this->toolParams;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['rec_suggestion_tool'] ?? null) !== null) {
            $obj->recSuggestionTool = (int) $v;
        }
        if (($v = $data['rec_suggestion_tool_str'] ?? null) !== null) {
            $obj->recSuggestionToolStr = (string) $v;
        }
        if (($v = $data['tool_params'] ?? null) !== null) {
            $obj->toolParams = (string) $v;
        }
        return $obj;
    }
}
