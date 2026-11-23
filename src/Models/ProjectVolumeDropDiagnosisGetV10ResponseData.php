<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectVolumeDropDiagnosisGetV10ResponseData implements \JsonSerializable
{
    /**
     * result_json, actions, evidence; IDs encoded as decimal strings
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * @var bool
     */
    protected ?bool $triggered = null;

    /**
     * result_json, actions, evidence; IDs encoded as decimal strings
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * result_json, actions, evidence; IDs encoded as decimal strings
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
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTriggered(): ?bool
    {
        return $this->triggered;
    }

    /**
     * @param bool $triggered
     * @return self
     */
    public function setTriggered(?bool $triggered): self
    {
        $this->triggered = $triggered;
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
        if ($this->triggered !== null) {
            $result['triggered'] = $this->triggered;
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
        if (($v = $data['triggered'] ?? null) !== null) {
            $obj->triggered = (bool) $v;
        }
        return $obj;
    }
}
