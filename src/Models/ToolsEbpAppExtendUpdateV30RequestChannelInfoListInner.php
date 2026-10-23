<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendUpdateV30RequestChannelInfoListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $cdnPath = null;

    /**
     * 渠道号
     * @var string
     */
    protected ?string $channelId = null;

    /**
     * 渠道包（子包）的下载地址，当前不支持修改
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 渠道包（子包）文件md5
     * @var string
     */
    protected ?string $md5 = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @return string
     */
    public function getCdnPath(): ?string
    {
        return $this->cdnPath;
    }

    /**
     * @param string $cdnPath
     * @return self
     */
    public function setCdnPath(?string $cdnPath): self
    {
        $this->cdnPath = $cdnPath;
        return $this;
    }

    /**
     * 渠道号
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * 渠道号
     * @param string $channelId
     * @return self
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * 渠道包（子包）的下载地址，当前不支持修改
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 渠道包（子包）的下载地址，当前不支持修改
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 渠道包（子包）文件md5
     * @return string
     */
    public function getMd5(): ?string
    {
        return $this->md5;
    }

    /**
     * 渠道包（子包）文件md5
     * @param string $md5
     * @return self
     */
    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cdnPath !== null) {
            $result['cdn_path'] = $this->cdnPath;
        }
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->md5 !== null) {
            $result['md5'] = $this->md5;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cdn_path'] ?? null) !== null) {
            $obj->cdnPath = (string) $v;
        }
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['md5'] ?? null) !== null) {
            $obj->md5 = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        return $obj;
    }
}
