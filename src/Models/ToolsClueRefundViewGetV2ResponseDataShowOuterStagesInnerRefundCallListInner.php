<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundViewGetV2ResponseDataShowOuterStagesInnerRefundCallListInner implements \JsonSerializable
{
    /**
     * 通话状态
     * @var string
     */
    protected ?string $billStateText = null;

    /**
     * 通话id, 和话单一一对应
     * @var string
     */
    protected ?string $callId = null;

    /**
     * UI颜色，飞鱼SDK前端所需字段，传入即可
     * @var string
     */
    protected ?string $color = null;

    /**
     * 不满足原因，, 仅在不满足要求时展示<br>例如：\"原因： 未打够35s\"
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 0,1,2
     * @var int
     */
    protected ?int $refundCheckResult = null;

    /**
     * 满足要求 | 不满足要求 | 已接通
     * @var string
     */
    protected ?string $refundCheckResultText = null;

    /**
     * 通话状态
     * @return string
     */
    public function getBillStateText(): ?string
    {
        return $this->billStateText;
    }

    /**
     * 通话状态
     * @param string $billStateText
     * @return self
     */
    public function setBillStateText(?string $billStateText): self
    {
        $this->billStateText = $billStateText;
        return $this;
    }

    /**
     * 通话id, 和话单一一对应
     * @return string
     */
    public function getCallId(): ?string
    {
        return $this->callId;
    }

    /**
     * 通话id, 和话单一一对应
     * @param string $callId
     * @return self
     */
    public function setCallId(?string $callId): self
    {
        $this->callId = $callId;
        return $this;
    }

    /**
     * UI颜色，飞鱼SDK前端所需字段，传入即可
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * UI颜色，飞鱼SDK前端所需字段，传入即可
     * @param string $color
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * 不满足原因，, 仅在不满足要求时展示<br>例如：\"原因： 未打够35s\"
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 不满足原因，, 仅在不满足要求时展示<br>例如：\"原因： 未打够35s\"
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 0,1,2
     * @return int
     */
    public function getRefundCheckResult(): ?int
    {
        return $this->refundCheckResult;
    }

    /**
     * 0,1,2
     * @param int $refundCheckResult
     * @return self
     */
    public function setRefundCheckResult(?int $refundCheckResult): self
    {
        $this->refundCheckResult = $refundCheckResult;
        return $this;
    }

    /**
     * 满足要求 | 不满足要求 | 已接通
     * @return string
     */
    public function getRefundCheckResultText(): ?string
    {
        return $this->refundCheckResultText;
    }

    /**
     * 满足要求 | 不满足要求 | 已接通
     * @param string $refundCheckResultText
     * @return self
     */
    public function setRefundCheckResultText(?string $refundCheckResultText): self
    {
        $this->refundCheckResultText = $refundCheckResultText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->billStateText !== null) {
            $result['bill_state_text'] = $this->billStateText;
        }
        if ($this->callId !== null) {
            $result['call_id'] = $this->callId;
        }
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->refundCheckResult !== null) {
            $result['refund_check_result'] = $this->refundCheckResult;
        }
        if ($this->refundCheckResultText !== null) {
            $result['refund_check_result_text'] = $this->refundCheckResultText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bill_state_text'] ?? null) !== null) {
            $obj->billStateText = (string) $v;
        }
        if (($v = $data['call_id'] ?? null) !== null) {
            $obj->callId = (string) $v;
        }
        if (($v = $data['color'] ?? null) !== null) {
            $obj->color = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['refund_check_result'] ?? null) !== null) {
            $obj->refundCheckResult = (int) $v;
        }
        if (($v = $data['refund_check_result_text'] ?? null) !== null) {
            $obj->refundCheckResultText = (string) $v;
        }
        return $obj;
    }
}
