<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectDeliveryUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * action、dry_run、executed、execution_attempted、requires_user_action、user_action_message；project_create_ads/pvr_correction/material_refresh 为 JSON 字符串
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * 诊断与所选操作是否成功；成功预览不等于已执行
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * action、dry_run、executed、execution_attempted、requires_user_action、user_action_message；project_create_ads/pvr_correction/material_refresh 为 JSON 字符串
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * action、dry_run、executed、execution_attempted、requires_user_action、user_action_message；project_create_ads/pvr_correction/material_refresh 为 JSON 字符串
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return string
     */
    public function getResMsg(): ?string
    {
        return $this->resMsg;
    }

    /**
     * @param string $resMsg
     * @return self
     */
    public function setResMsg(?string $resMsg): self
    {
        $this->resMsg = $resMsg;
        return $this;
    }

    /**
     * 诊断与所选操作是否成功；成功预览不等于已执行
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 诊断与所选操作是否成功；成功预览不等于已执行
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
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->resMsg !== null) {
            $result['res_msg'] = $this->resMsg;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['res_msg'] ?? null) !== null) {
            $obj->resMsg = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
