<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialSuggestionV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords $auditRecords = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords
     */
    public function getAuditRecords(): ?\Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords
    {
        return $this->auditRecords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords $auditRecords
     * @return self
     */
    public function setAuditRecords(?\Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords $auditRecords): self
    {
        $this->auditRecords = $auditRecords;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditRecords !== null) {
            $result['audit_records'] = $this->auditRecords;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_records'] ?? null) !== null && is_array($v)) {
            $obj->auditRecords = \Oceanengine\Models\QianchuanAdMaterialSuggestionV10ResponseDataListInnerAuditRecords::fromArray($v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
