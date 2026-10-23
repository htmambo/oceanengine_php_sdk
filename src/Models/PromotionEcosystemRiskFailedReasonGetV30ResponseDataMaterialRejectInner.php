<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEcosystemRiskFailedReasonGetV30ResponseDataMaterialRejectInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $failedDetail = null;

    /**
     * @var string
     */
    protected ?string $item = null;

    /**
     * @var string[]
     */
    protected ?array $rejectReason = null;

    /**
     * @var \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType
     */
    protected ?string $type = null;

    /**
     * @return string[]
     */
    public function getFailedDetail(): ?array
    {
        return $this->failedDetail;
    }

    /**
     * @param string[] $failedDetail
     * @return self
     */
    public function setFailedDetail(?array $failedDetail): self
    {
        $this->failedDetail = $failedDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getItem(): ?string
    {
        return $this->item;
    }

    /**
     * @param string $item
     * @return self
     */
    public function setItem(?string $item): self
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRejectReason(): ?array
    {
        return $this->rejectReason;
    }

    /**
     * @param string[] $rejectReason
     * @return self
     */
    public function setRejectReason(?array $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\PromotionEcosystemRiskFailedReasonGetV30DataMaterialRejectType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedDetail !== null) {
            $result['failed_detail'] = $this->failedDetail;
        }
        if ($this->item !== null) {
            $result['item'] = $this->item;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_detail'] ?? null) !== null && is_array($v)) {
            $obj->failedDetail = $v;
        }
        if (($v = $data['item'] ?? null) !== null) {
            $obj->item = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
