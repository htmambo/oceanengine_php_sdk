<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDisableCheckGetV2ResponseDataCheckpointsInner implements \JsonSerializable
{
    /**
     * 账户注销检查点类型 1-当前仍有非赠款余额未使用 2-当前仍有授信欠款未补齐 3-当前仍有退款申请进行中 4-当前仍有订单进行中 5-当前仍有投放计划进行中 6-当前存在不可退金额 7-当前仍有存量的资产 8-当前关联的飞鱼账户不可注销
     * @var int
     */
    protected ?int $checkpoint = null;

    /**
     * 检查项的详细信息
     * @var array<string,string>
     */
    protected ?array $detail = null;

    /**
     * true：通过检查点；false：未通过检查点
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 账户注销检查点类型 1-当前仍有非赠款余额未使用 2-当前仍有授信欠款未补齐 3-当前仍有退款申请进行中 4-当前仍有订单进行中 5-当前仍有投放计划进行中 6-当前存在不可退金额 7-当前仍有存量的资产 8-当前关联的飞鱼账户不可注销
     * @return int
     */
    public function getCheckpoint(): ?int
    {
        return $this->checkpoint;
    }

    /**
     * 账户注销检查点类型 1-当前仍有非赠款余额未使用 2-当前仍有授信欠款未补齐 3-当前仍有退款申请进行中 4-当前仍有订单进行中 5-当前仍有投放计划进行中 6-当前存在不可退金额 7-当前仍有存量的资产 8-当前关联的飞鱼账户不可注销
     * @param int $checkpoint
     * @return self
     */
    public function setCheckpoint(?int $checkpoint): self
    {
        $this->checkpoint = $checkpoint;
        return $this;
    }

    /**
     * 检查项的详细信息
     * @return array<string,string>
     */
    public function getDetail(): ?array
    {
        return $this->detail;
    }

    /**
     * 检查项的详细信息
     * @param array<string,string> $detail
     * @return self
     */
    public function setDetail(?array $detail): self
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * true：通过检查点；false：未通过检查点
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * true：通过检查点；false：未通过检查点
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->checkpoint !== null) {
            $result['checkpoint'] = $this->checkpoint;
        }
        if ($this->detail !== null) {
            $result['detail'] = $this->detail;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['checkpoint'] ?? null) !== null) {
            $obj->checkpoint = (int) $v;
        }
        if (($v = $data['detail'] ?? null) !== null && is_array($v)) {
            $obj->detail = $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
