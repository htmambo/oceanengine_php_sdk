<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectRejectReasonGetV30ResponseDataListInnerMaterialRejectInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform
     */
    protected ?string $auditPlatform = null;

    /**
     * @var string
     */
    protected ?string $item = null;

    /**
     * 拒绝建议
     * @var string[]
     */
    protected ?array $rejectReason = null;

    /**
     * 审核建议
     * @var string[]
     */
    protected ?array $suggestion = null;

    /**
     * @var \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectType
     */
    protected ?string $type = null;

    /**
     * @return \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform
     */
    public function getAuditPlatform(): ?string
    {
        return $this->auditPlatform;
    }

    /**
     * @param \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectAuditPlatform $auditPlatform
     * @return self
     */
    public function setAuditPlatform(?string $auditPlatform): self
    {
        $this->auditPlatform = $auditPlatform;
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
     * 拒绝建议
     * @return string[]
     */
    public function getRejectReason(): ?array
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝建议
     * @param string[] $rejectReason
     * @return self
     */
    public function setRejectReason(?array $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * 审核建议
     * @return string[]
     */
    public function getSuggestion(): ?array
    {
        return $this->suggestion;
    }

    /**
     * 审核建议
     * @param string[] $suggestion
     * @return self
     */
    public function setSuggestion(?array $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\OcProjectRejectReasonGetV30DataListMaterialRejectType $type
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
        if ($this->auditPlatform !== null) {
            $result['audit_platform'] = $this->auditPlatform;
        }
        if ($this->item !== null) {
            $result['item'] = $this->item;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_platform'] ?? null) !== null) {
            $obj->auditPlatform = (string) $v;
        }
        if (($v = $data['item'] ?? null) !== null) {
            $obj->item = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null && is_array($v)) {
            $obj->suggestion = $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
