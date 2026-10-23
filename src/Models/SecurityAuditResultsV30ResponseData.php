<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityAuditResultsV30ResponseData implements \JsonSerializable
{
    /**
     * 审核建议文案
     * @var string
     */
    protected ?string $reasonText = null;

    /**
     * @var \Oceanengine\Models\SecurityAuditResultsV30DataStatus
     */
    protected ?string $status = null;

    /**
     * 审核建议文案
     * @return string
     */
    public function getReasonText(): ?string
    {
        return $this->reasonText;
    }

    /**
     * 审核建议文案
     * @param string $reasonText
     * @return self
     */
    public function setReasonText(?string $reasonText): self
    {
        $this->reasonText = $reasonText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityAuditResultsV30DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SecurityAuditResultsV30DataStatus $status
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
        if ($this->reasonText !== null) {
            $result['reason_text'] = $this->reasonText;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reason_text'] ?? null) !== null) {
            $obj->reasonText = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
