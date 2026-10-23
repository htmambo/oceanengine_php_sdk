<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceInterestActionListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audienceLevel = null;

    /**
     * @var string
     */
    protected ?string $labelName = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $metrics = null;

    /**
     * @var string
     */
    protected ?string $superiorLabelName = null;

    /**
     * @return string
     */
    public function getAudienceLevel(): ?string
    {
        return $this->audienceLevel;
    }

    /**
     * @param string $audienceLevel
     * @return self
     */
    public function setAudienceLevel(?string $audienceLevel): self
    {
        $this->audienceLevel = $audienceLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelName(): ?string
    {
        return $this->labelName;
    }

    /**
     * @param string $labelName
     * @return self
     */
    public function setLabelName(?string $labelName): self
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param array<string,mixed> $metrics
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperiorLabelName(): ?string
    {
        return $this->superiorLabelName;
    }

    /**
     * @param string $superiorLabelName
     * @return self
     */
    public function setSuperiorLabelName(?string $superiorLabelName): self
    {
        $this->superiorLabelName = $superiorLabelName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceLevel !== null) {
            $result['audience_level'] = $this->audienceLevel;
        }
        if ($this->labelName !== null) {
            $result['label_name'] = $this->labelName;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->superiorLabelName !== null) {
            $result['superior_label_name'] = $this->superiorLabelName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_level'] ?? null) !== null) {
            $obj->audienceLevel = (string) $v;
        }
        if (($v = $data['label_name'] ?? null) !== null) {
            $obj->labelName = (string) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = $v;
        }
        if (($v = $data['superior_label_name'] ?? null) !== null) {
            $obj->superiorLabelName = (string) $v;
        }
        return $obj;
    }
}
