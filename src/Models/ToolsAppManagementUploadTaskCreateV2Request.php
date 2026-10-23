<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementUploadTaskCreateV2Request implements \JsonSerializable
{
    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 上传文件下载链接，长度最长255
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2FileType
     */
    protected ?string $fileType = null;

    /**
     * 文件md5，用于文件校验
     * @var string
     */
    protected ?string $md5 = null;

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户id指可以接的账号体系如广告主id、巨量纵横组织id等
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 上传文件下载链接，长度最长255
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 上传文件下载链接，长度最长255
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2FileType
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementUploadTaskCreateV2FileType $fileType
     * @return self
     */
    public function setFileType(?string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * 文件md5，用于文件校验
     * @return string
     */
    public function getMd5(): ?string
    {
        return $this->md5;
    }

    /**
     * 文件md5，用于文件校验
     * @param string $md5
     * @return self
     */
    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->fileType !== null) {
            $result['file_type'] = $this->fileType;
        }
        if ($this->md5 !== null) {
            $result['md5'] = $this->md5;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['file_type'] ?? null) !== null) {
            $obj->fileType = (string) $v;
        }
        if (($v = $data['md5'] ?? null) !== null) {
            $obj->md5 = (string) $v;
        }
        return $obj;
    }
}
