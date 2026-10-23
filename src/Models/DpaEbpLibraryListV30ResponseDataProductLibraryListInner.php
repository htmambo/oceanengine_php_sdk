<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpLibraryListV30ResponseDataProductLibraryListInner implements \JsonSerializable
{
    /**
     * 商品库所属账户类型
     * @var int
     */
    protected ?int $accountType = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 备份图片
     * @var string[]
     */
    protected ?array $backupImages = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf
     */
    protected ?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf $conf = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * json串key-value形式：表示词包、分类、元数据、用户行为、视频等数据的状态
     * @var string
     */
    protected ?string $dataStatus = null;

    /**
     * 历史所属账户ID
     * @var int
     */
    protected ?int $historyAccountId = null;

    /**
     * 历史所属账户类型
     * @var int
     */
    protected ?int $historyAccountType = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $operateAuth = null;

    /**
     * 商品库id
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * 数据导入方式
     * @var int
     */
    protected ?int $source = null;

    /**
     * 写入来源账户ID for 自动识别
     * @var int
     */
    protected ?int $sourceAccountId = null;

    /**
     * 写入来源账户类型 for 自动识别
     * @var int
     */
    protected ?int $sourceAccountType = null;

    /**
     * @var int
     */
    protected ?int $storeType = null;

    /**
     * 商品库所属账户类型
     * @return int
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * 商品库所属账户类型
     * @param int $accountType
     * @return self
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

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
     * 备份图片
     * @return string[]
     */
    public function getBackupImages(): ?array
    {
        return $this->backupImages;
    }

    /**
     * 备份图片
     * @param string[] $backupImages
     * @return self
     */
    public function setBackupImages(?array $backupImages): self
    {
        $this->backupImages = $backupImages;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf
     */
    public function getConf(): ?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf
    {
        return $this->conf;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf $conf
     * @return self
     */
    public function setConf(?\Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf $conf): self
    {
        $this->conf = $conf;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * json串key-value形式：表示词包、分类、元数据、用户行为、视频等数据的状态
     * @return string
     */
    public function getDataStatus(): ?string
    {
        return $this->dataStatus;
    }

    /**
     * json串key-value形式：表示词包、分类、元数据、用户行为、视频等数据的状态
     * @param string $dataStatus
     * @return self
     */
    public function setDataStatus(?string $dataStatus): self
    {
        $this->dataStatus = $dataStatus;
        return $this;
    }

    /**
     * 历史所属账户ID
     * @return int
     */
    public function getHistoryAccountId(): ?int
    {
        return $this->historyAccountId;
    }

    /**
     * 历史所属账户ID
     * @param int $historyAccountId
     * @return self
     */
    public function setHistoryAccountId(?int $historyAccountId): self
    {
        $this->historyAccountId = $historyAccountId;
        return $this;
    }

    /**
     * 历史所属账户类型
     * @return int
     */
    public function getHistoryAccountType(): ?int
    {
        return $this->historyAccountType;
    }

    /**
     * 历史所属账户类型
     * @param int $historyAccountType
     * @return self
     */
    public function setHistoryAccountType(?int $historyAccountType): self
    {
        $this->historyAccountType = $historyAccountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOperateAuth(): ?int
    {
        return $this->operateAuth;
    }

    /**
     * @param int $operateAuth
     * @return self
     */
    public function setOperateAuth(?int $operateAuth): self
    {
        $this->operateAuth = $operateAuth;
        return $this;
    }

    /**
     * 商品库id
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * 商品库id
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * 数据导入方式
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * 数据导入方式
     * @param int $source
     * @return self
     */
    public function setSource(?int $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 写入来源账户ID for 自动识别
     * @return int
     */
    public function getSourceAccountId(): ?int
    {
        return $this->sourceAccountId;
    }

    /**
     * 写入来源账户ID for 自动识别
     * @param int $sourceAccountId
     * @return self
     */
    public function setSourceAccountId(?int $sourceAccountId): self
    {
        $this->sourceAccountId = $sourceAccountId;
        return $this;
    }

    /**
     * 写入来源账户类型 for 自动识别
     * @return int
     */
    public function getSourceAccountType(): ?int
    {
        return $this->sourceAccountType;
    }

    /**
     * 写入来源账户类型 for 自动识别
     * @param int $sourceAccountType
     * @return self
     */
    public function setSourceAccountType(?int $sourceAccountType): self
    {
        $this->sourceAccountType = $sourceAccountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreType(): ?int
    {
        return $this->storeType;
    }

    /**
     * @param int $storeType
     * @return self
     */
    public function setStoreType(?int $storeType): self
    {
        $this->storeType = $storeType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->backupImages !== null) {
            $result['backup_images'] = $this->backupImages;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->conf !== null) {
            $result['conf'] = $this->conf;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->dataStatus !== null) {
            $result['data_status'] = $this->dataStatus;
        }
        if ($this->historyAccountId !== null) {
            $result['history_account_id'] = $this->historyAccountId;
        }
        if ($this->historyAccountType !== null) {
            $result['history_account_type'] = $this->historyAccountType;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->operateAuth !== null) {
            $result['operate_auth'] = $this->operateAuth;
        }
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->sourceAccountId !== null) {
            $result['source_account_id'] = $this->sourceAccountId;
        }
        if ($this->sourceAccountType !== null) {
            $result['source_account_type'] = $this->sourceAccountType;
        }
        if ($this->storeType !== null) {
            $result['store_type'] = $this->storeType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['backup_images'] ?? null) !== null && is_array($v)) {
            $obj->backupImages = $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['conf'] ?? null) !== null && is_array($v)) {
            $obj->conf = \Oceanengine\Models\DpaEbpLibraryListV30ResponseDataProductLibraryListInnerConf::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['data_status'] ?? null) !== null) {
            $obj->dataStatus = (string) $v;
        }
        if (($v = $data['history_account_id'] ?? null) !== null) {
            $obj->historyAccountId = (int) $v;
        }
        if (($v = $data['history_account_type'] ?? null) !== null) {
            $obj->historyAccountType = (int) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['operate_auth'] ?? null) !== null) {
            $obj->operateAuth = (int) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (int) $v;
        }
        if (($v = $data['source_account_id'] ?? null) !== null) {
            $obj->sourceAccountId = (int) $v;
        }
        if (($v = $data['source_account_type'] ?? null) !== null) {
            $obj->sourceAccountType = (int) $v;
        }
        if (($v = $data['store_type'] ?? null) !== null) {
            $obj->storeType = (int) $v;
        }
        return $obj;
    }
}
