<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInner implements \JsonSerializable
{
    /**
     * 是否符合: 0 不符合, 1 符合
     * @var int
     */
    protected ?int $innerRefundStatus = null;

    /**
     * \"符合\" ｜ \"未符合\"
     * @var string
     */
    protected ?string $innerRefundStatusText = null;

    /**
     * @var \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails
     */
    protected ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails $showTimeDetails = null;

    /**
     * true | false,是否显示小问号，飞鱼SDK前端所需字段，传入即可
     * @var bool
     */
    protected ?bool $showTip = null;

    /**
     * \"为保证首次跟进时间充裕，首通的12小时为可外呼时间段（7:00!23:00）的完整12小时\" ，飞鱼SDK前端所需字段，传入即可
     * @var string
     */
    protected ?string $showTipContent = null;

    /**
     * 在 0-12小时内 拨打电话为未接通 | 在 0-24小时内 拨打 3 次 电话为未接通
     * @var string
     */
    protected ?string $title = null;

    /**
     * 是否符合: 0 不符合, 1 符合
     * @return int
     */
    public function getInnerRefundStatus(): ?int
    {
        return $this->innerRefundStatus;
    }

    /**
     * 是否符合: 0 不符合, 1 符合
     * @param int $innerRefundStatus
     * @return self
     */
    public function setInnerRefundStatus(?int $innerRefundStatus): self
    {
        $this->innerRefundStatus = $innerRefundStatus;
        return $this;
    }

    /**
     * \"符合\" ｜ \"未符合\"
     * @return string
     */
    public function getInnerRefundStatusText(): ?string
    {
        return $this->innerRefundStatusText;
    }

    /**
     * \"符合\" ｜ \"未符合\"
     * @param string $innerRefundStatusText
     * @return self
     */
    public function setInnerRefundStatusText(?string $innerRefundStatusText): self
    {
        $this->innerRefundStatusText = $innerRefundStatusText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails
     */
    public function getShowTimeDetails(): ?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails
    {
        return $this->showTimeDetails;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails $showTimeDetails
     * @return self
     */
    public function setShowTimeDetails(?\Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails $showTimeDetails): self
    {
        $this->showTimeDetails = $showTimeDetails;
        return $this;
    }

    /**
     * true | false,是否显示小问号，飞鱼SDK前端所需字段，传入即可
     * @return bool
     */
    public function getShowTip(): ?bool
    {
        return $this->showTip;
    }

    /**
     * true | false,是否显示小问号，飞鱼SDK前端所需字段，传入即可
     * @param bool $showTip
     * @return self
     */
    public function setShowTip(?bool $showTip): self
    {
        $this->showTip = $showTip;
        return $this;
    }

    /**
     * \"为保证首次跟进时间充裕，首通的12小时为可外呼时间段（7:00!23:00）的完整12小时\" ，飞鱼SDK前端所需字段，传入即可
     * @return string
     */
    public function getShowTipContent(): ?string
    {
        return $this->showTipContent;
    }

    /**
     * \"为保证首次跟进时间充裕，首通的12小时为可外呼时间段（7:00!23:00）的完整12小时\" ，飞鱼SDK前端所需字段，传入即可
     * @param string $showTipContent
     * @return self
     */
    public function setShowTipContent(?string $showTipContent): self
    {
        $this->showTipContent = $showTipContent;
        return $this;
    }

    /**
     * 在 0-12小时内 拨打电话为未接通 | 在 0-24小时内 拨打 3 次 电话为未接通
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 在 0-12小时内 拨打电话为未接通 | 在 0-24小时内 拨打 3 次 电话为未接通
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
        if ($this->innerRefundStatus !== null) {
            $result['inner_refund_status'] = $this->innerRefundStatus;
        }
        if ($this->innerRefundStatusText !== null) {
            $result['inner_refund_status_text'] = $this->innerRefundStatusText;
        }
        if ($this->showTimeDetails !== null) {
            $result['show_time_details'] = $this->showTimeDetails;
        }
        if ($this->showTip !== null) {
            $result['show_tip'] = $this->showTip;
        }
        if ($this->showTipContent !== null) {
            $result['show_tip_content'] = $this->showTipContent;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['inner_refund_status'] ?? null) !== null) {
            $obj->innerRefundStatus = (int) $v;
        }
        if (($v = $data['inner_refund_status_text'] ?? null) !== null) {
            $obj->innerRefundStatusText = (string) $v;
        }
        if (($v = $data['show_time_details'] ?? null) !== null && is_array($v)) {
            $obj->showTimeDetails = \Oceanengine\Models\ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerShowInnerStagesInnerShowTimeDetails::fromArray($v);
        }
        if (($v = $data['show_tip'] ?? null) !== null) {
            $obj->showTip = (bool) $v;
        }
        if (($v = $data['show_tip_content'] ?? null) !== null) {
            $obj->showTipContent = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
