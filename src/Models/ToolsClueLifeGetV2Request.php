<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLifeGetV2Request implements \JsonSerializable
{
    /**
     * 是否开启敏感字段加密传输功能
     * @var bool
     */
    protected ?bool $encryptSensitiveFields = null;

    /**
     * 查询截止时间，格式：yyyy-MM-dd hh:mm:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 广告主ids，上限50
     * @var int[]
     */
    protected ?array $localAccountIds = null;

    /**
     * 页数 默认值: 1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页面大小 默认值: 10，上限：100
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 查询起始时间，格式：yyyy-MM-dd hh:mm:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 是否开启敏感字段加密传输功能
     * @return bool
     */
    public function getEncryptSensitiveFields(): ?bool
    {
        return $this->encryptSensitiveFields;
    }

    /**
     * 是否开启敏感字段加密传输功能
     * @param bool $encryptSensitiveFields
     * @return self
     */
    public function setEncryptSensitiveFields(?bool $encryptSensitiveFields): self
    {
        $this->encryptSensitiveFields = $encryptSensitiveFields;
        return $this;
    }

    /**
     * 查询截止时间，格式：yyyy-MM-dd hh:mm:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 查询截止时间，格式：yyyy-MM-dd hh:mm:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 广告主ids，上限50
     * @return int[]
     */
    public function getLocalAccountIds(): ?array
    {
        return $this->localAccountIds;
    }

    /**
     * 广告主ids，上限50
     * @param int[] $localAccountIds
     * @return self
     */
    public function setLocalAccountIds(?array $localAccountIds): self
    {
        $this->localAccountIds = $localAccountIds;
        return $this;
    }

    /**
     * 页数 默认值: 1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页数 默认值: 1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小 默认值: 10，上限：100
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页面大小 默认值: 10，上限：100
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 查询起始时间，格式：yyyy-MM-dd hh:mm:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 查询起始时间，格式：yyyy-MM-dd hh:mm:ss
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->encryptSensitiveFields !== null) {
            $result['encrypt_sensitive_fields'] = $this->encryptSensitiveFields;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->localAccountIds !== null) {
            $result['local_account_ids'] = $this->localAccountIds;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['encrypt_sensitive_fields'] ?? null) !== null) {
            $obj->encryptSensitiveFields = (bool) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['local_account_ids'] ?? null) !== null && is_array($v)) {
            $obj->localAccountIds = $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
