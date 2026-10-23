<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserCopyV2ResponseDataItemInner implements \JsonSerializable
{
    /**
     * 广告主账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 当失败时，返回的失败原因
     * @var string
     */
    protected ?string $errorMsg = null;

    /**
     * 广告主账户名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 复制是否成功
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 广告主账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 当失败时，返回的失败原因
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * 当失败时，返回的失败原因
     * @param string $errorMsg
     * @return self
     */
    public function setErrorMsg(?string $errorMsg): self
    {
        $this->errorMsg = $errorMsg;
        return $this;
    }

    /**
     * 广告主账户名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 广告主账户名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 复制是否成功
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 复制是否成功
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->errorMsg !== null) {
            $result['error_msg'] = $this->errorMsg;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['error_msg'] ?? null) !== null) {
            $obj->errorMsg = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
