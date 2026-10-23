<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskResultGetV2ResponseDataClearResultInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes[]
     */
    protected ?array $clearMaterialTypes = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult
     */
    protected ?string $clearResult = null;

    /**
     * @var int
     */
    protected ?int $creativeFailCount = null;

    /**
     * @var int
     */
    protected ?int $creativeSuccessCount = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $promotionFailCount = null;

    /**
     * @var int
     */
    protected ?int $promotionSuccessCount = null;

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes[]
     */
    public function getClearMaterialTypes(): ?array
    {
        return $this->clearMaterialTypes;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearMaterialTypes[] $clearMaterialTypes
     * @return self
     */
    public function setClearMaterialTypes(?array $clearMaterialTypes): self
    {
        $this->clearMaterialTypes = $clearMaterialTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult
     */
    public function getClearResult(): ?string
    {
        return $this->clearResult;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult $clearResult
     * @return self
     */
    public function setClearResult(?string $clearResult): self
    {
        $this->clearResult = $clearResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeFailCount(): ?int
    {
        return $this->creativeFailCount;
    }

    /**
     * @param int $creativeFailCount
     * @return self
     */
    public function setCreativeFailCount(?int $creativeFailCount): self
    {
        $this->creativeFailCount = $creativeFailCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeSuccessCount(): ?int
    {
        return $this->creativeSuccessCount;
    }

    /**
     * @param int $creativeSuccessCount
     * @return self
     */
    public function setCreativeSuccessCount(?int $creativeSuccessCount): self
    {
        $this->creativeSuccessCount = $creativeSuccessCount;
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
     * @return int
     */
    public function getPromotionFailCount(): ?int
    {
        return $this->promotionFailCount;
    }

    /**
     * @param int $promotionFailCount
     * @return self
     */
    public function setPromotionFailCount(?int $promotionFailCount): self
    {
        $this->promotionFailCount = $promotionFailCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionSuccessCount(): ?int
    {
        return $this->promotionSuccessCount;
    }

    /**
     * @param int $promotionSuccessCount
     * @return self
     */
    public function setPromotionSuccessCount(?int $promotionSuccessCount): self
    {
        $this->promotionSuccessCount = $promotionSuccessCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clearMaterialTypes !== null) {
            $result['clear_material_types'] = $this->clearMaterialTypes;
        }
        if ($this->clearResult !== null) {
            $result['clear_result'] = $this->clearResult;
        }
        if ($this->creativeFailCount !== null) {
            $result['creative_fail_count'] = $this->creativeFailCount;
        }
        if ($this->creativeSuccessCount !== null) {
            $result['creative_success_count'] = $this->creativeSuccessCount;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->promotionFailCount !== null) {
            $result['promotion_fail_count'] = $this->promotionFailCount;
        }
        if ($this->promotionSuccessCount !== null) {
            $result['promotion_success_count'] = $this->promotionSuccessCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clear_material_types'] ?? null) !== null && is_array($v)) {
            $obj->clearMaterialTypes = $v;
        }
        if (($v = $data['clear_result'] ?? null) !== null) {
            $obj->clearResult = (string) $v;
        }
        if (($v = $data['creative_fail_count'] ?? null) !== null) {
            $obj->creativeFailCount = (int) $v;
        }
        if (($v = $data['creative_success_count'] ?? null) !== null) {
            $obj->creativeSuccessCount = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['promotion_fail_count'] ?? null) !== null) {
            $obj->promotionFailCount = (int) $v;
        }
        if (($v = $data['promotion_success_count'] ?? null) !== null) {
            $obj->promotionSuccessCount = (int) $v;
        }
        return $obj;
    }
}
