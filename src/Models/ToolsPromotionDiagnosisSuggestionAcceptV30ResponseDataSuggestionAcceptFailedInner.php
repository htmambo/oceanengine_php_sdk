<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionAcceptV30ResponseDataSuggestionAcceptFailedInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * @var string
     */
    protected ?string $toolType = null;

    /**
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolType(): ?string
    {
        return $this->toolType;
    }

    /**
     * @param string $toolType
     * @return self
     */
    public function setToolType(?string $toolType): self
    {
        $this->toolType = $toolType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->toolType !== null) {
            $result['tool_type'] = $this->toolType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['tool_type'] ?? null) !== null) {
            $obj->toolType = (string) $v;
        }
        return $obj;
    }
}
