<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportVideoFrameGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics
     */
    protected ?\Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics $metrics = null;

    /**
     * @var int
     */
    protected ?int $second = null;

    /**
     * @return \Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecond(): ?int
    {
        return $this->second;
    }

    /**
     * @param int $second
     * @return self
     */
    public function setSecond(?int $second): self
    {
        $this->second = $second;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->second !== null) {
            $result['second'] = $this->second;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\ReportVideoFrameGetV2ResponseDataListInnerMetrics::fromArray($v);
        }
        if (($v = $data['second'] ?? null) !== null) {
            $obj->second = (int) $v;
        }
        return $obj;
    }
}
