<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceUpdateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueWechatInstanceUpdateV2Action
     */
    protected ?string $action = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 微信号码包ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 要修改的微信列表，最多不超过100个
     * @var string[]
     */
    protected ?array $wechatList = null;

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceUpdateV2Action
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceUpdateV2Action $action
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 微信号码包ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信号码包ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 要修改的微信列表，最多不超过100个
     * @return string[]
     */
    public function getWechatList(): ?array
    {
        return $this->wechatList;
    }

    /**
     * 要修改的微信列表，最多不超过100个
     * @param string[] $wechatList
     * @return self
     */
    public function setWechatList(?array $wechatList): self
    {
        $this->wechatList = $wechatList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->wechatList !== null) {
            $result['wechat_list'] = $this->wechatList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action'] ?? null) !== null) {
            $obj->action = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['wechat_list'] ?? null) !== null && is_array($v)) {
            $obj->wechatList = $v;
        }
        return $obj;
    }
}
