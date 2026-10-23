<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo implements \JsonSerializable
{
    /**
     * 平台定义的行业节点枚举值
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueBizStates[]
     */
    protected ?array $clueBizStates = null;

    /**
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState
     */
    protected ?string $clueConvertState = null;

    /**
     * 平台定义的行业节点枚举值
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueBizStates[]
     */
    public function getClueBizStates(): ?array
    {
        return $this->clueBizStates;
    }

    /**
     * 平台定义的行业节点枚举值
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueBizStates[] $clueBizStates
     * @return self
     */
    public function setClueBizStates(?array $clueBizStates): self
    {
        $this->clueBizStates = $clueBizStates;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState
     */
    public function getClueConvertState(): ?string
    {
        return $this->clueConvertState;
    }

    /**
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2ClueConvertInfoClueConvertState $clueConvertState
     * @return self
     */
    public function setClueConvertState(?string $clueConvertState): self
    {
        $this->clueConvertState = $clueConvertState;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clueBizStates !== null) {
            $result['clue_biz_states'] = $this->clueBizStates;
        }
        if ($this->clueConvertState !== null) {
            $result['clue_convert_state'] = $this->clueConvertState;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clue_biz_states'] ?? null) !== null && is_array($v)) {
            $obj->clueBizStates = $v;
        }
        if (($v = $data['clue_convert_state'] ?? null) !== null) {
            $obj->clueConvertState = (string) $v;
        }
        return $obj;
    }
}
