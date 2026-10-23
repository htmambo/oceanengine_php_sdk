<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaDetailGetV2ResponseDataListInnerAuditReasonsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditHitField = null;

    /**
     * @var string
     */
    protected ?string $auditReasonText = null;

    /**
     * @return string
     */
    public function getAuditHitField(): ?string
    {
        return $this->auditHitField;
    }

    /**
     * @param string $auditHitField
     * @return self
     */
    public function setAuditHitField(?string $auditHitField): self
    {
        $this->auditHitField = $auditHitField;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditReasonText(): ?string
    {
        return $this->auditReasonText;
    }

    /**
     * @param string $auditReasonText
     * @return self
     */
    public function setAuditReasonText(?string $auditReasonText): self
    {
        $this->auditReasonText = $auditReasonText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditHitField !== null) {
            $result['audit_hit_field'] = $this->auditHitField;
        }
        if ($this->auditReasonText !== null) {
            $result['audit_reason_text'] = $this->auditReasonText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_hit_field'] ?? null) !== null) {
            $obj->auditHitField = (string) $v;
        }
        if (($v = $data['audit_reason_text'] ?? null) !== null) {
            $obj->auditReasonText = (string) $v;
        }
        return $obj;
    }
}
