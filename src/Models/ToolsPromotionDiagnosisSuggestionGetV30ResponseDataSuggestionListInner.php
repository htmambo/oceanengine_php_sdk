<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInner[]
     */
    protected ?array $sceneList = null;

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInner[]
     */
    public function getSceneList(): ?array
    {
        return $this->sceneList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInner[] $sceneList
     * @return self
     */
    public function setSceneList(?array $sceneList): self
    {
        $this->sceneList = $sceneList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->sceneList !== null) {
            $result['scene_list'] = $this->sceneList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['scene_list'] ?? null) !== null && is_array($v)) {
            $obj->sceneList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
