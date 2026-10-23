<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppExtendListV30ResponseDataExtendPackageListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $channelId = null;

    /**
     * @var string
     */
    protected ?string $currentVersion = null;

    /**
     * 白名单自定义下载链接
     * @var string
     */
    protected ?string $customizeDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var string
     */
    protected ?string $md5 = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 备注信息
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppExtendListV30DataExtendPackageListStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $updateTime = null;

    /**
     * @var string
     */
    protected ?string $versionName = null;

    /**
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * @param string $channelId
     * @return self
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentVersion(): ?string
    {
        return $this->currentVersion;
    }

    /**
     * @param string $currentVersion
     * @return self
     */
    public function setCurrentVersion(?string $currentVersion): self
    {
        $this->currentVersion = $currentVersion;
        return $this;
    }

    /**
     * 白名单自定义下载链接
     * @return string
     */
    public function getCustomizeDownloadUrl(): ?string
    {
        return $this->customizeDownloadUrl;
    }

    /**
     * 白名单自定义下载链接
     * @param string $customizeDownloadUrl
     * @return self
     */
    public function setCustomizeDownloadUrl(?string $customizeDownloadUrl): self
    {
        $this->customizeDownloadUrl = $customizeDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMd5(): ?string
    {
        return $this->md5;
    }

    /**
     * @param string $md5
     * @return self
     */
    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 备注信息
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注信息
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppExtendListV30DataExtendPackageListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppExtendListV30DataExtendPackageListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     * @return self
     */
    public function setUpdateTime(?int $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    /**
     * @param string $versionName
     * @return self
     */
    public function setVersionName(?string $versionName): self
    {
        $this->versionName = $versionName;
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
        if ($this->currentVersion !== null) {
            $result['current_version'] = $this->currentVersion;
        }
        if ($this->customizeDownloadUrl !== null) {
            $result['customize_download_url'] = $this->customizeDownloadUrl;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->md5 !== null) {
            $result['md5'] = $this->md5;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->versionName !== null) {
            $result['version_name'] = $this->versionName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (string) $v;
        }
        if (($v = $data['current_version'] ?? null) !== null) {
            $obj->currentVersion = (string) $v;
        }
        if (($v = $data['customize_download_url'] ?? null) !== null) {
            $obj->customizeDownloadUrl = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['md5'] ?? null) !== null) {
            $obj->md5 = (string) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (int) $v;
        }
        if (($v = $data['version_name'] ?? null) !== null) {
            $obj->versionName = (string) $v;
        }
        return $obj;
    }
}
