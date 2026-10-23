<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceUpdateV2ResponseDataFailWechatListInner implements \JsonSerializable
{
    /**
     * 失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 微信号码
     * @var string
     */
    protected ?string $wechat = null;

    /**
     * 失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 微信号码
     * @return string
     */
    public function getWechat(): ?string
    {
        return $this->wechat;
    }

    /**
     * 微信号码
     * @param string $wechat
     * @return self
     */
    public function setWechat(?string $wechat): self
    {
        $this->wechat = $wechat;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->wechat !== null) {
            $result['wechat'] = $this->wechat;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['wechat'] ?? null) !== null) {
            $obj->wechat = (string) $v;
        }
        return $obj;
    }
}
