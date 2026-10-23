<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseData implements \JsonSerializable
{
    /**
     * 完整的反馈要求说明
     * @var string[]
     */
    protected ?array $fullRefundTerms = null;

    /**
     * 赔付结果<br>0:\"赔付状态待确认\"<br>1:\"不可赔付\"<br>2:“可赔付”
     * @var int
     */
    protected ?int $globalRefundResult = null;

    /**
     * 原因：<br>[ <br>\"线索落入 24小时 内存在「已接通」电话，不满足无效线索条件，不支持赔付。\"<br>],<br>// \"24小时内 没打够次数，不支持赔付。\" 等
     * @var string[]
     */
    protected ?array $globalRefundResultReason = null;

    /**
     * 赔付状态描述：\"赔付状态待确认\"，\"不可赔付\"，\"可赔付\"
     * @var string
     */
    protected ?string $globalRefundResultText = null;

    /**
     * 对应返款视图上表现的大阶段，如下
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInner[]
     */
    protected ?array $showOuterStages = null;

    /**
     * 是否展示返款视图
     * @var bool
     */
    protected ?bool $showRefundView = null;

    /**
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails
     */
    protected ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails $showTimeDetails = null;

    /**
     * 完整的反馈要求说明
     * @return string[]
     */
    public function getFullRefundTerms(): ?array
    {
        return $this->fullRefundTerms;
    }

    /**
     * 完整的反馈要求说明
     * @param string[] $fullRefundTerms
     * @return self
     */
    public function setFullRefundTerms(?array $fullRefundTerms): self
    {
        $this->fullRefundTerms = $fullRefundTerms;
        return $this;
    }

    /**
     * 赔付结果<br>0:\"赔付状态待确认\"<br>1:\"不可赔付\"<br>2:“可赔付”
     * @return int
     */
    public function getGlobalRefundResult(): ?int
    {
        return $this->globalRefundResult;
    }

    /**
     * 赔付结果<br>0:\"赔付状态待确认\"<br>1:\"不可赔付\"<br>2:“可赔付”
     * @param int $globalRefundResult
     * @return self
     */
    public function setGlobalRefundResult(?int $globalRefundResult): self
    {
        $this->globalRefundResult = $globalRefundResult;
        return $this;
    }

    /**
     * 原因：<br>[ <br>\"线索落入 24小时 内存在「已接通」电话，不满足无效线索条件，不支持赔付。\"<br>],<br>// \"24小时内 没打够次数，不支持赔付。\" 等
     * @return string[]
     */
    public function getGlobalRefundResultReason(): ?array
    {
        return $this->globalRefundResultReason;
    }

    /**
     * 原因：<br>[ <br>\"线索落入 24小时 内存在「已接通」电话，不满足无效线索条件，不支持赔付。\"<br>],<br>// \"24小时内 没打够次数，不支持赔付。\" 等
     * @param string[] $globalRefundResultReason
     * @return self
     */
    public function setGlobalRefundResultReason(?array $globalRefundResultReason): self
    {
        $this->globalRefundResultReason = $globalRefundResultReason;
        return $this;
    }

    /**
     * 赔付状态描述：\"赔付状态待确认\"，\"不可赔付\"，\"可赔付\"
     * @return string
     */
    public function getGlobalRefundResultText(): ?string
    {
        return $this->globalRefundResultText;
    }

    /**
     * 赔付状态描述：\"赔付状态待确认\"，\"不可赔付\"，\"可赔付\"
     * @param string $globalRefundResultText
     * @return self
     */
    public function setGlobalRefundResultText(?string $globalRefundResultText): self
    {
        $this->globalRefundResultText = $globalRefundResultText;
        return $this;
    }

    /**
     * 对应返款视图上表现的大阶段，如下
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInner[]
     */
    public function getShowOuterStages(): ?array
    {
        return $this->showOuterStages;
    }

    /**
     * 对应返款视图上表现的大阶段，如下
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInner[] $showOuterStages
     * @return self
     */
    public function setShowOuterStages(?array $showOuterStages): self
    {
        $this->showOuterStages = $showOuterStages;
        return $this;
    }

    /**
     * 是否展示返款视图
     * @return bool
     */
    public function getShowRefundView(): ?bool
    {
        return $this->showRefundView;
    }

    /**
     * 是否展示返款视图
     * @param bool $showRefundView
     * @return self
     */
    public function setShowRefundView(?bool $showRefundView): self
    {
        $this->showRefundView = $showRefundView;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails
     */
    public function getShowTimeDetails(): ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails
    {
        return $this->showTimeDetails;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails $showTimeDetails
     * @return self
     */
    public function setShowTimeDetails(?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails $showTimeDetails): self
    {
        $this->showTimeDetails = $showTimeDetails;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fullRefundTerms !== null) {
            $result['full_refund_terms'] = $this->fullRefundTerms;
        }
        if ($this->globalRefundResult !== null) {
            $result['global_refund_result'] = $this->globalRefundResult;
        }
        if ($this->globalRefundResultReason !== null) {
            $result['global_refund_result_reason'] = $this->globalRefundResultReason;
        }
        if ($this->globalRefundResultText !== null) {
            $result['global_refund_result_text'] = $this->globalRefundResultText;
        }
        if ($this->showOuterStages !== null) {
            $result['show_outer_stages'] = $this->showOuterStages;
        }
        if ($this->showRefundView !== null) {
            $result['show_refund_view'] = $this->showRefundView;
        }
        if ($this->showTimeDetails !== null) {
            $result['show_time_details'] = $this->showTimeDetails;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['full_refund_terms'] ?? null) !== null && is_array($v)) {
            $obj->fullRefundTerms = $v;
        }
        if (($v = $data['global_refund_result'] ?? null) !== null) {
            $obj->globalRefundResult = (int) $v;
        }
        if (($v = $data['global_refund_result_reason'] ?? null) !== null && is_array($v)) {
            $obj->globalRefundResultReason = $v;
        }
        if (($v = $data['global_refund_result_text'] ?? null) !== null) {
            $obj->globalRefundResultText = (string) $v;
        }
        if (($v = $data['show_outer_stages'] ?? null) !== null && is_array($v)) {
            $obj->showOuterStages = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInner::fromArray($vv), $v);
        }
        if (($v = $data['show_refund_view'] ?? null) !== null) {
            $obj->showRefundView = (bool) $v;
        }
        if (($v = $data['show_time_details'] ?? null) !== null && is_array($v)) {
            $obj->showTimeDetails = \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowTimeDetails::fromArray($v);
        }
        return $obj;
    }
}
