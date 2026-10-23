<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInner implements \JsonSerializable
{
    /**
     * 订单审核状态 未审核 = 0 脚本审核失败 = 1 脚本审核通过 = 2 视频审核失败 = 3 视频审核通过 = 4 组件审核拒绝 = 5 组件审核通过 = 6 订单跳过审核 = 7
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * 达人取消原因
     * @var string
     */
    protected ?string $authorCancelReason = null;

    /**
     * 达人取消状态 0 = 未发起 1 = 已发起
     * @var int
     */
    protected ?int $authorCancelStatus = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo $authorInfo = null;

    /**
     * 组件点击检测链接
     * @var string
     */
    protected ?string $componentClickMonitorUrl = null;

    /**
     * 任务创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo $demandInfo = null;

    /**
     * 任务完结时间（如订单顺利完结即为验收时间）
     * @var int
     */
    protected ?int $finishTime = null;

    /**
     * 视频曝光检测链接
     * @var string
     */
    protected ?string $itemShowMonitorUrl = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo $orderItemInfo = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo
     */
    protected ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo $paymentInfo = null;

    /**
     * 视频发布时间
     * @var int
     */
    protected ?int $releaseTime = null;

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @var int
     */
    protected ?int $status = null;

    /**
     * 订单审核状态 未审核 = 0 脚本审核失败 = 1 脚本审核通过 = 2 视频审核失败 = 3 视频审核通过 = 4 组件审核拒绝 = 5 组件审核通过 = 6 订单跳过审核 = 7
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * 订单审核状态 未审核 = 0 脚本审核失败 = 1 脚本审核通过 = 2 视频审核失败 = 3 视频审核通过 = 4 组件审核拒绝 = 5 组件审核通过 = 6 订单跳过审核 = 7
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 达人取消原因
     * @return string
     */
    public function getAuthorCancelReason(): ?string
    {
        return $this->authorCancelReason;
    }

    /**
     * 达人取消原因
     * @param string $authorCancelReason
     * @return self
     */
    public function setAuthorCancelReason(?string $authorCancelReason): self
    {
        $this->authorCancelReason = $authorCancelReason;
        return $this;
    }

    /**
     * 达人取消状态 0 = 未发起 1 = 已发起
     * @return int
     */
    public function getAuthorCancelStatus(): ?int
    {
        return $this->authorCancelStatus;
    }

    /**
     * 达人取消状态 0 = 未发起 1 = 已发起
     * @param int $authorCancelStatus
     * @return self
     */
    public function setAuthorCancelStatus(?int $authorCancelStatus): self
    {
        $this->authorCancelStatus = $authorCancelStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo
     */
    public function getAuthorInfo(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo
    {
        return $this->authorInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo $authorInfo
     * @return self
     */
    public function setAuthorInfo(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo $authorInfo): self
    {
        $this->authorInfo = $authorInfo;
        return $this;
    }

    /**
     * 组件点击检测链接
     * @return string
     */
    public function getComponentClickMonitorUrl(): ?string
    {
        return $this->componentClickMonitorUrl;
    }

    /**
     * 组件点击检测链接
     * @param string $componentClickMonitorUrl
     * @return self
     */
    public function setComponentClickMonitorUrl(?string $componentClickMonitorUrl): self
    {
        $this->componentClickMonitorUrl = $componentClickMonitorUrl;
        return $this;
    }

    /**
     * 任务创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * 任务完结时间（如订单顺利完结即为验收时间）
     * @return int
     */
    public function getFinishTime(): ?int
    {
        return $this->finishTime;
    }

    /**
     * 任务完结时间（如订单顺利完结即为验收时间）
     * @param int $finishTime
     * @return self
     */
    public function setFinishTime(?int $finishTime): self
    {
        $this->finishTime = $finishTime;
        return $this;
    }

    /**
     * 视频曝光检测链接
     * @return string
     */
    public function getItemShowMonitorUrl(): ?string
    {
        return $this->itemShowMonitorUrl;
    }

    /**
     * 视频曝光检测链接
     * @param string $itemShowMonitorUrl
     * @return self
     */
    public function setItemShowMonitorUrl(?string $itemShowMonitorUrl): self
    {
        $this->itemShowMonitorUrl = $itemShowMonitorUrl;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo
     */
    public function getOrderItemInfo(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo
    {
        return $this->orderItemInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo $orderItemInfo
     * @return self
     */
    public function setOrderItemInfo(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo $orderItemInfo): self
    {
        $this->orderItemInfo = $orderItemInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo
     */
    public function getPaymentInfo(): ?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo
    {
        return $this->paymentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo $paymentInfo
     * @return self
     */
    public function setPaymentInfo(?\Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo $paymentInfo): self
    {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    /**
     * 视频发布时间
     * @return int
     */
    public function getReleaseTime(): ?int
    {
        return $this->releaseTime;
    }

    /**
     * 视频发布时间
     * @param int $releaseTime
     * @return self
     */
    public function setReleaseTime(?int $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
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
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->authorCancelReason !== null) {
            $result['author_cancel_reason'] = $this->authorCancelReason;
        }
        if ($this->authorCancelStatus !== null) {
            $result['author_cancel_status'] = $this->authorCancelStatus;
        }
        if ($this->authorInfo !== null) {
            $result['author_info'] = $this->authorInfo;
        }
        if ($this->componentClickMonitorUrl !== null) {
            $result['component_click_monitor_url'] = $this->componentClickMonitorUrl;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandInfo !== null) {
            $result['demand_info'] = $this->demandInfo;
        }
        if ($this->finishTime !== null) {
            $result['finish_time'] = $this->finishTime;
        }
        if ($this->itemShowMonitorUrl !== null) {
            $result['item_show_monitor_url'] = $this->itemShowMonitorUrl;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderItemInfo !== null) {
            $result['order_item_info'] = $this->orderItemInfo;
        }
        if ($this->paymentInfo !== null) {
            $result['payment_info'] = $this->paymentInfo;
        }
        if ($this->releaseTime !== null) {
            $result['release_time'] = $this->releaseTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['author_cancel_reason'] ?? null) !== null) {
            $obj->authorCancelReason = (string) $v;
        }
        if (($v = $data['author_cancel_status'] ?? null) !== null) {
            $obj->authorCancelStatus = (int) $v;
        }
        if (($v = $data['author_info'] ?? null) !== null && is_array($v)) {
            $obj->authorInfo = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerAuthorInfo::fromArray($v);
        }
        if (($v = $data['component_click_monitor_url'] ?? null) !== null) {
            $obj->componentClickMonitorUrl = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerDemandInfo::fromArray($v);
        }
        if (($v = $data['finish_time'] ?? null) !== null) {
            $obj->finishTime = (int) $v;
        }
        if (($v = $data['item_show_monitor_url'] ?? null) !== null) {
            $obj->itemShowMonitorUrl = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_item_info'] ?? null) !== null && is_array($v)) {
            $obj->orderItemInfo = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo::fromArray($v);
        }
        if (($v = $data['payment_info'] ?? null) !== null && is_array($v)) {
            $obj->paymentInfo = \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerPaymentInfo::fromArray($v);
        }
        if (($v = $data['release_time'] ?? null) !== null) {
            $obj->releaseTime = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
