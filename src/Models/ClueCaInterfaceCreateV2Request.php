<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCaInterfaceCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 兜底获客助手组件id
     * @var int
     */
    protected ?int $backupInstanceId = null;

    /**
     * 回调地址
     * @var string
     */
    protected ?string $callBackUrl = null;

    /**
     * 自定义参数
     * @var string
     */
    protected ?string $customParams = null;

    /**
     * 去重时间
     * @var int
     */
    protected ?int $deduplicationExp = null;

    /**
     * 去重key
     * @var string
     */
    protected ?string $deduplicationKey = null;

    /**
     * 获客助手接口版组件名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 兜底获客助手组件id
     * @return int
     */
    public function getBackupInstanceId(): ?int
    {
        return $this->backupInstanceId;
    }

    /**
     * 兜底获客助手组件id
     * @param int $backupInstanceId
     * @return self
     */
    public function setBackupInstanceId(?int $backupInstanceId): self
    {
        $this->backupInstanceId = $backupInstanceId;
        return $this;
    }

    /**
     * 回调地址
     * @return string
     */
    public function getCallBackUrl(): ?string
    {
        return $this->callBackUrl;
    }

    /**
     * 回调地址
     * @param string $callBackUrl
     * @return self
     */
    public function setCallBackUrl(?string $callBackUrl): self
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }

    /**
     * 自定义参数
     * @return string
     */
    public function getCustomParams(): ?string
    {
        return $this->customParams;
    }

    /**
     * 自定义参数
     * @param string $customParams
     * @return self
     */
    public function setCustomParams(?string $customParams): self
    {
        $this->customParams = $customParams;
        return $this;
    }

    /**
     * 去重时间
     * @return int
     */
    public function getDeduplicationExp(): ?int
    {
        return $this->deduplicationExp;
    }

    /**
     * 去重时间
     * @param int $deduplicationExp
     * @return self
     */
    public function setDeduplicationExp(?int $deduplicationExp): self
    {
        $this->deduplicationExp = $deduplicationExp;
        return $this;
    }

    /**
     * 去重key
     * @return string
     */
    public function getDeduplicationKey(): ?string
    {
        return $this->deduplicationKey;
    }

    /**
     * 去重key
     * @param string $deduplicationKey
     * @return self
     */
    public function setDeduplicationKey(?string $deduplicationKey): self
    {
        $this->deduplicationKey = $deduplicationKey;
        return $this;
    }

    /**
     * 获客助手接口版组件名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 获客助手接口版组件名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->backupInstanceId !== null) {
            $result['backup_instance_id'] = $this->backupInstanceId;
        }
        if ($this->callBackUrl !== null) {
            $result['call_back_url'] = $this->callBackUrl;
        }
        if ($this->customParams !== null) {
            $result['custom_params'] = $this->customParams;
        }
        if ($this->deduplicationExp !== null) {
            $result['deduplication_exp'] = $this->deduplicationExp;
        }
        if ($this->deduplicationKey !== null) {
            $result['deduplication_key'] = $this->deduplicationKey;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['backup_instance_id'] ?? null) !== null) {
            $obj->backupInstanceId = (int) $v;
        }
        if (($v = $data['call_back_url'] ?? null) !== null) {
            $obj->callBackUrl = (string) $v;
        }
        if (($v = $data['custom_params'] ?? null) !== null) {
            $obj->customParams = (string) $v;
        }
        if (($v = $data['deduplication_exp'] ?? null) !== null) {
            $obj->deduplicationExp = (int) $v;
        }
        if (($v = $data['deduplication_key'] ?? null) !== null) {
            $obj->deduplicationKey = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
