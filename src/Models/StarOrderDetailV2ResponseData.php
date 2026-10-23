<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderDetailV2ResponseData implements \JsonSerializable
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
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo
     */
    protected ?\Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo $authorInfo = null;

    /**
     * 组件信息
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInner[]
     */
    protected ?array $componentInfo = null;

    /**
     * 任务创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 任务完结时间
     * @var int
     */
    protected ?int $finishTime = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo
     */
    protected ?\Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo $paymentInfo = null;

    /**
     * 脚本列表
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataScriptListInner[]
     */
    protected ?array $scriptList = null;

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @var int
     */
    protected ?int $status = null;

    /**
     * 视频列表
     * @var \Oceanengine\Models\StarOrderDetailV2ResponseDataVideoListInner[]
     */
    protected ?array $videoList = null;

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
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo
     */
    public function getAuthorInfo(): ?\Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo
    {
        return $this->authorInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo $authorInfo
     * @return self
     */
    public function setAuthorInfo(?\Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo $authorInfo): self
    {
        $this->authorInfo = $authorInfo;
        return $this;
    }

    /**
     * 组件信息
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInner[]
     */
    public function getComponentInfo(): ?array
    {
        return $this->componentInfo;
    }

    /**
     * 组件信息
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInner[] $componentInfo
     * @return self
     */
    public function setComponentInfo(?array $componentInfo): self
    {
        $this->componentInfo = $componentInfo;
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
     * 任务完结时间
     * @return int
     */
    public function getFinishTime(): ?int
    {
        return $this->finishTime;
    }

    /**
     * 任务完结时间
     * @param int $finishTime
     * @return self
     */
    public function setFinishTime(?int $finishTime): self
    {
        $this->finishTime = $finishTime;
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
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo
     */
    public function getPaymentInfo(): ?\Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo
    {
        return $this->paymentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo $paymentInfo
     * @return self
     */
    public function setPaymentInfo(?\Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo $paymentInfo): self
    {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    /**
     * 脚本列表
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataScriptListInner[]
     */
    public function getScriptList(): ?array
    {
        return $this->scriptList;
    }

    /**
     * 脚本列表
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataScriptListInner[] $scriptList
     * @return self
     */
    public function setScriptList(?array $scriptList): self
    {
        $this->scriptList = $scriptList;
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
     * 视频列表
     * @return \Oceanengine\Models\StarOrderDetailV2ResponseDataVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * 视频列表
     * @param \Oceanengine\Models\StarOrderDetailV2ResponseDataVideoListInner[] $videoList
     * @return self
     */
    public function setVideoList(?array $videoList): self
    {
        $this->videoList = $videoList;
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
        if ($this->componentInfo !== null) {
            $result['component_info'] = $this->componentInfo;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->finishTime !== null) {
            $result['finish_time'] = $this->finishTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->paymentInfo !== null) {
            $result['payment_info'] = $this->paymentInfo;
        }
        if ($this->scriptList !== null) {
            $result['script_list'] = $this->scriptList;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
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
            $obj->authorInfo = \Oceanengine\Models\StarOrderDetailV2ResponseDataAuthorInfo::fromArray($v);
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = array_map(fn ($vv) => \Oceanengine\Models\StarOrderDetailV2ResponseDataComponentInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['finish_time'] ?? null) !== null) {
            $obj->finishTime = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['payment_info'] ?? null) !== null && is_array($v)) {
            $obj->paymentInfo = \Oceanengine\Models\StarOrderDetailV2ResponseDataPaymentInfo::fromArray($v);
        }
        if (($v = $data['script_list'] ?? null) !== null && is_array($v)) {
            $obj->scriptList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderDetailV2ResponseDataScriptListInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderDetailV2ResponseDataVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
