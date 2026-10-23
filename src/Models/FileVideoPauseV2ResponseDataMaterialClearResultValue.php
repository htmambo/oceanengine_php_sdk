<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoPauseV2ResponseDataMaterialClearResultValue implements \JsonSerializable
{
    /**
     * 清理失败的使用该素材的创意ID
     * @var int[]
     */
    protected ?array $creativeFailureList = null;

    /**
     * 清理成功的使用该素材的创意ID
     * @var int[]
     */
    protected ?array $creativeSuccessList = null;

    /**
     * 素材是否被清理（存在内部错误导致素材没有被清理）
     * @var bool
     */
    protected ?bool $isCleared = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 素材未被清理原因
     * @var string
     */
    protected ?string $msg = null;

    /**
     * 清理失败的使用该素材的广告ID
     * @var int[]
     */
    protected ?array $promotionFailureList = null;

    /**
     * 清理成功的使用该素材的广告ID
     * @var int[]
     */
    protected ?array $promotionSuccessList = null;

    /**
     * 清理失败的使用该素材的创意ID
     * @return int[]
     */
    public function getCreativeFailureList(): ?array
    {
        return $this->creativeFailureList;
    }

    /**
     * 清理失败的使用该素材的创意ID
     * @param int[] $creativeFailureList
     * @return self
     */
    public function setCreativeFailureList(?array $creativeFailureList): self
    {
        $this->creativeFailureList = $creativeFailureList;
        return $this;
    }

    /**
     * 清理成功的使用该素材的创意ID
     * @return int[]
     */
    public function getCreativeSuccessList(): ?array
    {
        return $this->creativeSuccessList;
    }

    /**
     * 清理成功的使用该素材的创意ID
     * @param int[] $creativeSuccessList
     * @return self
     */
    public function setCreativeSuccessList(?array $creativeSuccessList): self
    {
        $this->creativeSuccessList = $creativeSuccessList;
        return $this;
    }

    /**
     * 素材是否被清理（存在内部错误导致素材没有被清理）
     * @return bool
     */
    public function getIsCleared(): ?bool
    {
        return $this->isCleared;
    }

    /**
     * 素材是否被清理（存在内部错误导致素材没有被清理）
     * @param bool $isCleared
     * @return self
     */
    public function setIsCleared(?bool $isCleared): self
    {
        $this->isCleared = $isCleared;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 素材未被清理原因
     * @return string
     */
    public function getMsg(): ?string
    {
        return $this->msg;
    }

    /**
     * 素材未被清理原因
     * @param string $msg
     * @return self
     */
    public function setMsg(?string $msg): self
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * 清理失败的使用该素材的广告ID
     * @return int[]
     */
    public function getPromotionFailureList(): ?array
    {
        return $this->promotionFailureList;
    }

    /**
     * 清理失败的使用该素材的广告ID
     * @param int[] $promotionFailureList
     * @return self
     */
    public function setPromotionFailureList(?array $promotionFailureList): self
    {
        $this->promotionFailureList = $promotionFailureList;
        return $this;
    }

    /**
     * 清理成功的使用该素材的广告ID
     * @return int[]
     */
    public function getPromotionSuccessList(): ?array
    {
        return $this->promotionSuccessList;
    }

    /**
     * 清理成功的使用该素材的广告ID
     * @param int[] $promotionSuccessList
     * @return self
     */
    public function setPromotionSuccessList(?array $promotionSuccessList): self
    {
        $this->promotionSuccessList = $promotionSuccessList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeFailureList !== null) {
            $result['creative_failure_list'] = $this->creativeFailureList;
        }
        if ($this->creativeSuccessList !== null) {
            $result['creative_success_list'] = $this->creativeSuccessList;
        }
        if ($this->isCleared !== null) {
            $result['is_cleared'] = $this->isCleared;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->msg !== null) {
            $result['msg'] = $this->msg;
        }
        if ($this->promotionFailureList !== null) {
            $result['promotion_failure_list'] = $this->promotionFailureList;
        }
        if ($this->promotionSuccessList !== null) {
            $result['promotion_success_list'] = $this->promotionSuccessList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_failure_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeFailureList = $v;
        }
        if (($v = $data['creative_success_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeSuccessList = $v;
        }
        if (($v = $data['is_cleared'] ?? null) !== null) {
            $obj->isCleared = (bool) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['msg'] ?? null) !== null) {
            $obj->msg = (string) $v;
        }
        if (($v = $data['promotion_failure_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionFailureList = $v;
        }
        if (($v = $data['promotion_success_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionSuccessList = $v;
        }
        return $obj;
    }
}
