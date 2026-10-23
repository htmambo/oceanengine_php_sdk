<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
