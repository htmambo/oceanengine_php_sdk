<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserAssignV2ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 分配失败原因
     * @var string
     */
    protected ?string $errMsg = null;

    /**
     * 分配是否成功, true:成功, false:失败
     * @var bool
     */
    protected ?bool $success = null;

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
     * 分配失败原因
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }

    /**
     * 分配失败原因
     * @param string $errMsg
     * @return self
     */
    public function setErrMsg(?string $errMsg): self
    {
        $this->errMsg = $errMsg;
        return $this;
    }

    /**
     * 分配是否成功, true:成功, false:失败
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 分配是否成功, true:成功, false:失败
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
        if ($this->errMsg !== null) {
            $result['err_msg'] = $this->errMsg;
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
        if (($v = $data['err_msg'] ?? null) !== null) {
            $obj->errMsg = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
