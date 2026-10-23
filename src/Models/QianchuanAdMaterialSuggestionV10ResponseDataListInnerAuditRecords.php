<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform
     */
    protected ?string $auditPlatform = null;

    /**
     * @var string[]
     */
    protected ?array $rejectReason = null;

    /**
     * @var string[]
     */
    protected ?array $suggestions = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform
     */
    public function getAuditPlatform(): ?string
    {
        return $this->auditPlatform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialSuggestionV10DataListAuditRecordsAuditPlatform $auditPlatform
     * @return self
     */
    public function setAuditPlatform(?string $auditPlatform): self
    {
        $this->auditPlatform = $auditPlatform;
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
     * @return string[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param string[] $suggestions
     * @return self
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;
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
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->suggestions !== null) {
            $result['suggestions'] = $this->suggestions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_platform'] ?? null) !== null) {
            $obj->auditPlatform = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['suggestions'] ?? null) !== null && is_array($v)) {
            $obj->suggestions = $v;
        }
        return $obj;
    }
}
