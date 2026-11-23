<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInnerAuditResultListInner implements \JsonSerializable
{
    /**
     * 业务审核状态
     * @var int
     */
    protected ?int $bizAuditStatus = null;

    /**
     * 审核业务类型
     * @var int
     */
    protected ?int $bizType = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * 创意序号
     * @var int
     */
    protected ?int $creativeIndex = null;

    /**
     * 人群个性化信息
     * @var string
     */
    protected ?string $crowdPersonalize = null;

    /**
     * 审核对象ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 拒绝原因
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * 审核投放状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 审核状态文案
     * @var string
     */
    protected ?string $statusText = null;

    /**
     * 词包ID
     * @var int
     */
    protected ?int $wordbagId = null;

    /**
     * 词包序号
     * @var int
     */
    protected ?int $wordbagIndex = null;

    /**
     * 词包名称
     * @var string
     */
    protected ?string $wordbagName = null;

    /**
     * 业务审核状态
     * @return int
     */
    public function getBizAuditStatus(): ?int
    {
        return $this->bizAuditStatus;
    }

    /**
     * 业务审核状态
     * @param int $bizAuditStatus
     * @return self
     */
    public function setBizAuditStatus(?int $bizAuditStatus): self
    {
        $this->bizAuditStatus = $bizAuditStatus;
        return $this;
    }

    /**
     * 审核业务类型
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * 审核业务类型
     * @param int $bizType
     * @return self
     */
    public function setBizType(?int $bizType): self
    {
        $this->bizType = $bizType;
        return $this;
    }

    /**
     * 创意ID
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意ID
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * 创意序号
     * @return int
     */
    public function getCreativeIndex(): ?int
    {
        return $this->creativeIndex;
    }

    /**
     * 创意序号
     * @param int $creativeIndex
     * @return self
     */
    public function setCreativeIndex(?int $creativeIndex): self
    {
        $this->creativeIndex = $creativeIndex;
        return $this;
    }

    /**
     * 人群个性化信息
     * @return string
     */
    public function getCrowdPersonalize(): ?string
    {
        return $this->crowdPersonalize;
    }

    /**
     * 人群个性化信息
     * @param string $crowdPersonalize
     * @return self
     */
    public function setCrowdPersonalize(?string $crowdPersonalize): self
    {
        $this->crowdPersonalize = $crowdPersonalize;
        return $this;
    }

    /**
     * 审核对象ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 审核对象ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 拒绝原因
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝原因
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * 审核投放状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 审核投放状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 审核状态文案
     * @return string
     */
    public function getStatusText(): ?string
    {
        return $this->statusText;
    }

    /**
     * 审核状态文案
     * @param string $statusText
     * @return self
     */
    public function setStatusText(?string $statusText): self
    {
        $this->statusText = $statusText;
        return $this;
    }

    /**
     * 词包ID
     * @return int
     */
    public function getWordbagId(): ?int
    {
        return $this->wordbagId;
    }

    /**
     * 词包ID
     * @param int $wordbagId
     * @return self
     */
    public function setWordbagId(?int $wordbagId): self
    {
        $this->wordbagId = $wordbagId;
        return $this;
    }

    /**
     * 词包序号
     * @return int
     */
    public function getWordbagIndex(): ?int
    {
        return $this->wordbagIndex;
    }

    /**
     * 词包序号
     * @param int $wordbagIndex
     * @return self
     */
    public function setWordbagIndex(?int $wordbagIndex): self
    {
        $this->wordbagIndex = $wordbagIndex;
        return $this;
    }

    /**
     * 词包名称
     * @return string
     */
    public function getWordbagName(): ?string
    {
        return $this->wordbagName;
    }

    /**
     * 词包名称
     * @param string $wordbagName
     * @return self
     */
    public function setWordbagName(?string $wordbagName): self
    {
        $this->wordbagName = $wordbagName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bizAuditStatus !== null) {
            $result['biz_audit_status'] = $this->bizAuditStatus;
        }
        if ($this->bizType !== null) {
            $result['biz_type'] = $this->bizType;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeIndex !== null) {
            $result['creative_index'] = $this->creativeIndex;
        }
        if ($this->crowdPersonalize !== null) {
            $result['crowd_personalize'] = $this->crowdPersonalize;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusText !== null) {
            $result['status_text'] = $this->statusText;
        }
        if ($this->wordbagId !== null) {
            $result['wordbag_id'] = $this->wordbagId;
        }
        if ($this->wordbagIndex !== null) {
            $result['wordbag_index'] = $this->wordbagIndex;
        }
        if ($this->wordbagName !== null) {
            $result['wordbag_name'] = $this->wordbagName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_audit_status'] ?? null) !== null) {
            $obj->bizAuditStatus = (int) $v;
        }
        if (($v = $data['biz_type'] ?? null) !== null) {
            $obj->bizType = (int) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['creative_index'] ?? null) !== null) {
            $obj->creativeIndex = (int) $v;
        }
        if (($v = $data['crowd_personalize'] ?? null) !== null) {
            $obj->crowdPersonalize = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_text'] ?? null) !== null) {
            $obj->statusText = (string) $v;
        }
        if (($v = $data['wordbag_id'] ?? null) !== null) {
            $obj->wordbagId = (int) $v;
        }
        if (($v = $data['wordbag_index'] ?? null) !== null) {
            $obj->wordbagIndex = (int) $v;
        }
        if (($v = $data['wordbag_name'] ?? null) !== null) {
            $obj->wordbagName = (string) $v;
        }
        return $obj;
    }
}
