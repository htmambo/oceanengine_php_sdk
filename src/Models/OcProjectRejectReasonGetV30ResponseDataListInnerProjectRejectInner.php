<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectRejectReasonGetV30ResponseDataListInnerProjectRejectInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectRejectReasonGetV30DataListProjectRejectContent
     */
    protected ?string $content = null;

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
     * @return \Oceanengine\Models\OcProjectRejectReasonGetV30DataListProjectRejectContent
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param \Oceanengine\Models\OcProjectRejectReasonGetV30DataListProjectRejectContent $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null && is_array($v)) {
            $obj->suggestion = $v;
        }
        return $obj;
    }
}
