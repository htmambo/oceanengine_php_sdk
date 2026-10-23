<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementExtendPackageCreateV2V2RequestChannelListInner implements \JsonSerializable
{
    /**
     * 渠道号，渠道号ID支持英文，数字，下划线和连字符-，不超过50个字符，超出部分会被截断，示例：oceanengine_ads_sample-12
     * @var string
     */
    protected ?string $channelId = null;

    /**
     * 下载链接，（mode=Customize时需指定）渠道包（子包）的下载地址
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 下载链接对应包体的md5，（mode=Customize时需指定）
     * @var string
     */
    protected ?string $md5 = null;

    /**
     * 备注，渠道包备注信息，至多20个字符，超出部分会被截断处理
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 渠道号，渠道号ID支持英文，数字，下划线和连字符-，不超过50个字符，超出部分会被截断，示例：oceanengine_ads_sample-12
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * 渠道号，渠道号ID支持英文，数字，下划线和连字符-，不超过50个字符，超出部分会被截断，示例：oceanengine_ads_sample-12
     * @param string $channelId
     * @return self
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * 下载链接，（mode=Customize时需指定）渠道包（子包）的下载地址
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 下载链接，（mode=Customize时需指定）渠道包（子包）的下载地址
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 下载链接对应包体的md5，（mode=Customize时需指定）
     * @return string
     */
    public function getMd5(): ?string
    {
        return $this->md5;
    }

    /**
     * 下载链接对应包体的md5，（mode=Customize时需指定）
     * @param string $md5
     * @return self
     */
    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * 备注，渠道包备注信息，至多20个字符，超出部分会被截断处理
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注，渠道包备注信息，至多20个字符，超出部分会被截断处理
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
