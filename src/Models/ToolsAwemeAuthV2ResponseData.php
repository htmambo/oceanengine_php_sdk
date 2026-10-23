<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthV2ResponseData implements \JsonSerializable
{
    /**
     * 发起授权是否成功标记
     * @var string
     */
    protected ?string $authStatus = null;

    /**
     * 错误信息
     * @var string
     */
    protected ?string $errMsg = null;

    /**
     * 发起授权是否成功标记
     * @return string
     */
    public function getAuthStatus(): ?string
    {
        return $this->authStatus;
    }

    /**
     * 发起授权是否成功标记
     * @param string $authStatus
     * @return self
     */
    public function setAuthStatus(?string $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * 错误信息
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }

    /**
     * 错误信息
     * @param string $errMsg
     * @return self
     */
    public function setErrMsg(?string $errMsg): self
    {
        $this->errMsg = $errMsg;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->errMsg !== null) {
            $result['err_msg'] = $this->errMsg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_status'] ?? null) !== null) {
            $obj->authStatus = (string) $v;
        }
        if (($v = $data['err_msg'] ?? null) !== null) {
            $obj->errMsg = (string) $v;
        }
        return $obj;
    }
}
