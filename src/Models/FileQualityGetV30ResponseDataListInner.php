<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileQualityGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errmsg = null;

    /**
     * 是否是首发素材
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * 是否同质化素材风险-未投放预计排队素材
     * @var bool
     */
    protected ?bool $isSimilarExpectedQueueMaterial = null;

    /**
     * 是否同质化素材风险-排队投放素材
     * @var bool
     */
    protected ?bool $isSimilarQueueMaterial = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\FileQualityGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getErrmsg(): ?string
    {
        return $this->errmsg;
    }

    /**
     * @param string $errmsg
     * @return self
     */
    public function setErrmsg(?string $errmsg): self
    {
        $this->errmsg = $errmsg;
        return $this;
    }

    /**
     * 是否是首发素材
     * @return bool
     */
    public function getIsFirstPublishMaterial(): ?bool
    {
        return $this->isFirstPublishMaterial;
    }

    /**
     * 是否是首发素材
     * @param bool $isFirstPublishMaterial
     * @return self
     */
    public function setIsFirstPublishMaterial(?bool $isFirstPublishMaterial): self
    {
        $this->isFirstPublishMaterial = $isFirstPublishMaterial;
        return $this;
    }

    /**
     * 是否同质化素材风险-未投放预计排队素材
     * @return bool
     */
    public function getIsSimilarExpectedQueueMaterial(): ?bool
    {
        return $this->isSimilarExpectedQueueMaterial;
    }

    /**
     * 是否同质化素材风险-未投放预计排队素材
     * @param bool $isSimilarExpectedQueueMaterial
     * @return self
     */
    public function setIsSimilarExpectedQueueMaterial(?bool $isSimilarExpectedQueueMaterial): self
    {
        $this->isSimilarExpectedQueueMaterial = $isSimilarExpectedQueueMaterial;
        return $this;
    }

    /**
     * 是否同质化素材风险-排队投放素材
     * @return bool
     */
    public function getIsSimilarQueueMaterial(): ?bool
    {
        return $this->isSimilarQueueMaterial;
    }

    /**
     * 是否同质化素材风险-排队投放素材
     * @param bool $isSimilarQueueMaterial
     * @return self
     */
    public function setIsSimilarQueueMaterial(?bool $isSimilarQueueMaterial): self
    {
        $this->isSimilarQueueMaterial = $isSimilarQueueMaterial;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileQualityGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\FileQualityGetV30DataListStatus $status
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
        if ($this->errmsg !== null) {
            $result['errmsg'] = $this->errmsg;
        }
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isSimilarExpectedQueueMaterial !== null) {
            $result['is_similar_expected_queue_material'] = $this->isSimilarExpectedQueueMaterial;
        }
        if ($this->isSimilarQueueMaterial !== null) {
            $result['is_similar_queue_material'] = $this->isSimilarQueueMaterial;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errmsg'] ?? null) !== null) {
            $obj->errmsg = (string) $v;
        }
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_expected_queue_material'] ?? null) !== null) {
            $obj->isSimilarExpectedQueueMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_queue_material'] ?? null) !== null) {
            $obj->isSimilarQueueMaterial = (bool) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
