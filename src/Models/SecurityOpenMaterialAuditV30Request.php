<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityOpenMaterialAuditV30Request implements \JsonSerializable
{
    /**
     * 代理商ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\SecurityOpenMaterialAuditV30BusinessType
     */
    protected ?string $businessType = null;

    /**
     * 素材内容，视频-vid
     * @var string
     */
    protected ?string $data = null;

    /**
     * @var \Oceanengine\Models\SecurityOpenMaterialAuditV30MsgType
     */
    protected ?string $msgType = null;

    /**
     * 需要取消送审的对象ID（由送审接口返回的object_id），送审时不填
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * 商品ID，目前只支持千川的商品ID
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\SecurityOpenMaterialAuditV30Type
     */
    protected ?string $type = null;

    /**
     * 代理商ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 代理商ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityOpenMaterialAuditV30BusinessType
     */
    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    /**
     * @param \Oceanengine\Models\SecurityOpenMaterialAuditV30BusinessType $businessType
     * @return self
     */
    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * 素材内容，视频-vid
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * 素材内容，视频-vid
     * @param string $data
     * @return self
     */
    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityOpenMaterialAuditV30MsgType
     */
    public function getMsgType(): ?string
    {
        return $this->msgType;
    }

    /**
     * @param \Oceanengine\Models\SecurityOpenMaterialAuditV30MsgType $msgType
     * @return self
     */
    public function setMsgType(?string $msgType): self
    {
        $this->msgType = $msgType;
        return $this;
    }

    /**
     * 需要取消送审的对象ID（由送审接口返回的object_id），送审时不填
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * 需要取消送审的对象ID（由送审接口返回的object_id），送审时不填
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 商品ID，目前只支持千川的商品ID
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID，目前只支持千川的商品ID
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityOpenMaterialAuditV30Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\SecurityOpenMaterialAuditV30Type $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->businessType !== null) {
            $result['business_type'] = $this->businessType;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->msgType !== null) {
            $result['msg_type'] = $this->msgType;
        }
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['business_type'] ?? null) !== null) {
            $obj->businessType = (string) $v;
        }
        if (($v = $data['data'] ?? null) !== null) {
            $obj->data = (string) $v;
        }
        if (($v = $data['msg_type'] ?? null) !== null) {
            $obj->msgType = (string) $v;
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
