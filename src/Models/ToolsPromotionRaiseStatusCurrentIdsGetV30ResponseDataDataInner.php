<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInner implements \JsonSerializable
{
    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo
     */
    protected ?\Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo $raiseInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus
     */
    protected ?string $status = null;

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo
     */
    public function getRaiseInfo(): ?\Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo
    {
        return $this->raiseInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo $raiseInfo
     * @return self
     */
    public function setRaiseInfo(?\Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo $raiseInfo): self
    {
        $this->raiseInfo = $raiseInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30DataDataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->raiseInfo !== null) {
            $result['raise_info'] = $this->raiseInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['raise_info'] ?? null) !== null && is_array($v)) {
            $obj->raiseInfo = \Oceanengine\Models\ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
