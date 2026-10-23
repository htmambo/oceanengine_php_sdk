<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpPlayletAuthGetV30ResponseData implements \JsonSerializable
{
    /**
     * 短剧ID
     * @var string
     */
    protected ?string $albumId = null;

    /**
     * 短剧名称
     * @var string
     */
    protected ?string $albumName = null;

    /**
     * 申请提交时间
     * @var string
     */
    protected ?string $applyTime = null;

    /**
     * 授权过期时间
     * @var string
     */
    protected ?string $expireTime = null;

    /**
     * 申请状态
     * @var string
     */
    protected ?string $status = null;

    /**
     * 短剧ID
     * @return string
     */
    public function getAlbumId(): ?string
    {
        return $this->albumId;
    }

    /**
     * 短剧ID
     * @param string $albumId
     * @return self
     */
    public function setAlbumId(?string $albumId): self
    {
        $this->albumId = $albumId;
        return $this;
    }

    /**
     * 短剧名称
     * @return string
     */
    public function getAlbumName(): ?string
    {
        return $this->albumName;
    }

    /**
     * 短剧名称
     * @param string $albumName
     * @return self
     */
    public function setAlbumName(?string $albumName): self
    {
        $this->albumName = $albumName;
        return $this;
    }

    /**
     * 申请提交时间
     * @return string
     */
    public function getApplyTime(): ?string
    {
        return $this->applyTime;
    }

    /**
     * 申请提交时间
     * @param string $applyTime
     * @return self
     */
    public function setApplyTime(?string $applyTime): self
    {
        $this->applyTime = $applyTime;
        return $this;
    }

    /**
     * 授权过期时间
     * @return string
     */
    public function getExpireTime(): ?string
    {
        return $this->expireTime;
    }

    /**
     * 授权过期时间
     * @param string $expireTime
     * @return self
     */
    public function setExpireTime(?string $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * 申请状态
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 申请状态
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->albumId !== null) {
            $result['album_id'] = $this->albumId;
        }
        if ($this->albumName !== null) {
            $result['album_name'] = $this->albumName;
        }
        if ($this->applyTime !== null) {
            $result['apply_time'] = $this->applyTime;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['album_id'] ?? null) !== null) {
            $obj->albumId = (string) $v;
        }
        if (($v = $data['album_name'] ?? null) !== null) {
            $obj->albumName = (string) $v;
        }
        if (($v = $data['apply_time'] ?? null) !== null) {
            $obj->applyTime = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
