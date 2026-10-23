<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatPoolListV2Filter implements \JsonSerializable
{
    /**
     * 审核状态，0审核中、1审核拒绝、2审核通过
     * @var \Oceanengine\Models\ClueWechatPoolListV2FilterAuditStatus[]
     */
    protected ?array $auditStatus = null;

    /**
     * 微信号码包ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 微信昵称，模糊匹配
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * 分页，>=1，默认值1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页大小，1-100，默认值20
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 微信号，模糊匹配
     * @var string
     */
    protected ?string $wechatNumber = null;

    /**
     * 审核状态，0审核中、1审核拒绝、2审核通过
     * @return \Oceanengine\Models\ClueWechatPoolListV2FilterAuditStatus[]
     */
    public function getAuditStatus(): ?array
    {
        return $this->auditStatus;
    }

    /**
     * 审核状态，0审核中、1审核拒绝、2审核通过
     * @param \Oceanengine\Models\ClueWechatPoolListV2FilterAuditStatus[] $auditStatus
     * @return self
     */
    public function setAuditStatus(?array $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 微信号码包ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 微信号码包ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 微信昵称，模糊匹配
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * 微信昵称，模糊匹配
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
        return $this;
    }

    /**
     * 分页，>=1，默认值1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 分页，>=1，默认值1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小，1-100，默认值20
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页大小，1-100，默认值20
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 微信号，模糊匹配
     * @return string
     */
    public function getWechatNumber(): ?string
    {
        return $this->wechatNumber;
    }

    /**
     * 微信号，模糊匹配
     * @param string $wechatNumber
     * @return self
     */
    public function setWechatNumber(?string $wechatNumber): self
    {
        $this->wechatNumber = $wechatNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->wechatNumber !== null) {
            $result['wechat_number'] = $this->wechatNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null && is_array($v)) {
            $obj->auditStatus = $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['wechat_number'] ?? null) !== null) {
            $obj->wechatNumber = (string) $v;
        }
        return $obj;
    }
}
