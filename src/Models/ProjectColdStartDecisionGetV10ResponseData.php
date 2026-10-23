<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectColdStartDecisionGetV10ResponseData implements \JsonSerializable
{
    /**
     * 额外附加信息；包含历史截断标记，false 不代表窗口外历史也未达标
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * 查询窗口内 SUM(adv_value) 严格大于400时为 true，否则为 false。仅 success=true 时有效；历史截断时 false 不代表窗口外历史未通过。
     * @var bool
     */
    protected ?bool $passed = null;

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * 查询和判断是否成功；仅为 true 时 passed 有效。
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 额外附加信息；包含历史截断标记，false 不代表窗口外历史也未达标
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * 额外附加信息；包含历史截断标记，false 不代表窗口外历史也未达标
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * 查询窗口内 SUM(adv_value) 严格大于400时为 true，否则为 false。仅 success=true 时有效；历史截断时 false 不代表窗口外历史未通过。
     * @return bool
     */
    public function getPassed(): ?bool
    {
        return $this->passed;
    }

    /**
     * 查询窗口内 SUM(adv_value) 严格大于400时为 true，否则为 false。仅 success=true 时有效；历史截断时 false 不代表窗口外历史未通过。
     * @param bool $passed
     * @return self
     */
    public function setPassed(?bool $passed): self
    {
        $this->passed = $passed;
        return $this;
    }

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @return string
     */
    public function getResMsg(): ?string
    {
        return $this->resMsg;
    }

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @param string $resMsg
     * @return self
     */
    public function setResMsg(?string $resMsg): self
    {
        $this->resMsg = $resMsg;
        return $this;
    }

    /**
     * 查询和判断是否成功；仅为 true 时 passed 有效。
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 查询和判断是否成功；仅为 true 时 passed 有效。
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
        if ($this->passed !== null) {
            $result['passed'] = $this->passed;
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
        if (($v = $data['passed'] ?? null) !== null) {
            $obj->passed = (bool) $v;
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
