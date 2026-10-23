<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment $comment = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert $convert = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness $costEffectiveness = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative $creative = null;

    /**
     * @var \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread
     */
    protected ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread $spread = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment
     */
    public function getComment(): ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment
    {
        return $this->comment;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment $comment
     * @return self
     */
    public function setComment(?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert
     */
    public function getConvert(): ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert
    {
        return $this->convert;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert $convert
     * @return self
     */
    public function setConvert(?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert $convert): self
    {
        $this->convert = $convert;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness
     */
    public function getCostEffectiveness(): ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness
    {
        return $this->costEffectiveness;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness $costEffectiveness
     * @return self
     */
    public function setCostEffectiveness(?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness $costEffectiveness): self
    {
        $this->costEffectiveness = $costEffectiveness;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative
     */
    public function getCreative(): ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative
    {
        return $this->creative;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative $creative
     * @return self
     */
    public function setCreative(?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative $creative): self
    {
        $this->creative = $creative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread
     */
    public function getSpread(): ?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread
    {
        return $this->spread;
    }

    /**
     * @param \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread $spread
     * @return self
     */
    public function setSpread(?\Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread $spread): self
    {
        $this->spread = $spread;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->costEffectiveness !== null) {
            $result['cost_effectiveness'] = $this->costEffectiveness;
        }
        if ($this->creative !== null) {
            $result['creative'] = $this->creative;
        }
        if ($this->spread !== null) {
            $result['spread'] = $this->spread;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['comment'] ?? null) !== null && is_array($v)) {
            $obj->comment = \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataComment::fromArray($v);
        }
        if (($v = $data['convert'] ?? null) !== null && is_array($v)) {
            $obj->convert = \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataConvert::fromArray($v);
        }
        if (($v = $data['cost_effectiveness'] ?? null) !== null && is_array($v)) {
            $obj->costEffectiveness = \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCostEffectiveness::fromArray($v);
        }
        if (($v = $data['creative'] ?? null) !== null && is_array($v)) {
            $obj->creative = \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataCreative::fromArray($v);
        }
        if (($v = $data['spread'] ?? null) !== null && is_array($v)) {
            $obj->spread = \Oceanengine\Models\StarReportOrderOverviewGetV2ResponseDataSpread::fromArray($v);
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
