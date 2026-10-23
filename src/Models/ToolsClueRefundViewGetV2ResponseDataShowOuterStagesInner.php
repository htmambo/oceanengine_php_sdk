<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail
     */
    protected ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail $callCountDetail = null;

    /**
     * 返款标签 (参与返款、支持赔付)
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerRefundCallListInner[]
     */
    protected ?array $refundCallList = null;

    /**
     * 展示上面的小阶段，比如人工拨打时，第一个ShowOuterStage包含了两个小阶段（0-12小时，0-24小时）
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInner[]
     */
    protected ?array $showInnerStages = null;

    /**
     * 线索id
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail
     */
    public function getCallCountDetail(): ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail
    {
        return $this->callCountDetail;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail $callCountDetail
     * @return self
     */
    public function setCallCountDetail(?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail $callCountDetail): self
    {
        $this->callCountDetail = $callCountDetail;
        return $this;
    }

    /**
     * 返款标签 (参与返款、支持赔付)
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerRefundCallListInner[]
     */
    public function getRefundCallList(): ?array
    {
        return $this->refundCallList;
    }

    /**
     * 返款标签 (参与返款、支持赔付)
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerRefundCallListInner[] $refundCallList
     * @return self
     */
    public function setRefundCallList(?array $refundCallList): self
    {
        $this->refundCallList = $refundCallList;
        return $this;
    }

    /**
     * 展示上面的小阶段，比如人工拨打时，第一个ShowOuterStage包含了两个小阶段（0-12小时，0-24小时）
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInner[]
     */
    public function getShowInnerStages(): ?array
    {
        return $this->showInnerStages;
    }

    /**
     * 展示上面的小阶段，比如人工拨打时，第一个ShowOuterStage包含了两个小阶段（0-12小时，0-24小时）
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInner[] $showInnerStages
     * @return self
     */
    public function setShowInnerStages(?array $showInnerStages): self
    {
        $this->showInnerStages = $showInnerStages;
        return $this;
    }

    /**
     * 线索id
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 线索id
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->callCountDetail !== null) {
            $result['call_count_detail'] = $this->callCountDetail;
        }
        if ($this->refundCallList !== null) {
            $result['refund_call_list'] = $this->refundCallList;
        }
        if ($this->showInnerStages !== null) {
            $result['show_inner_stages'] = $this->showInnerStages;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['call_count_detail'] ?? null) !== null && is_array($v)) {
            $obj->callCountDetail = \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerCallCountDetail::fromArray($v);
        }
        if (($v = $data['refund_call_list'] ?? null) !== null && is_array($v)) {
            $obj->refundCallList = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerRefundCallListInner::fromArray($vv), $v);
        }
        if (($v = $data['show_inner_stages'] ?? null) !== null && is_array($v)) {
            $obj->showInnerStages = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
