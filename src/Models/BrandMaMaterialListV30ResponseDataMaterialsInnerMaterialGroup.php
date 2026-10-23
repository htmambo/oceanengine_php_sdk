<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialGroup implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 投放内容
     * @var int
     */
    protected ?int $contentType = null;

    /**
     * 电商活动ID
     * @var int
     */
    protected ?int $ecomActivityId = null;

    /**
     * 投放内容
     * @var int
     */
    protected ?int $groupType = null;

    /**
     * 创意组ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 创意类型
     * @var int
     */
    protected ?int $imageMode = null;

    /**
     * 生服账号ID
     * @var int
     */
    protected ?int $lifeAccountId = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 开屏类型
     * @var int
     */
    protected ?int $splashStyleType = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放内容
     * @return int
     */
    public function getContentType(): ?int
    {
        return $this->contentType;
    }

    /**
     * 投放内容
     * @param int $contentType
     * @return self
     */
    public function setContentType(?int $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * 电商活动ID
     * @return int
     */
    public function getEcomActivityId(): ?int
    {
        return $this->ecomActivityId;
    }

    /**
     * 电商活动ID
     * @param int $ecomActivityId
     * @return self
     */
    public function setEcomActivityId(?int $ecomActivityId): self
    {
        $this->ecomActivityId = $ecomActivityId;
        return $this;
    }

    /**
     * 投放内容
     * @return int
     */
    public function getGroupType(): ?int
    {
        return $this->groupType;
    }

    /**
     * 投放内容
     * @param int $groupType
     * @return self
     */
    public function setGroupType(?int $groupType): self
    {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * 创意组ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 创意组ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 创意类型
     * @return int
     */
    public function getImageMode(): ?int
    {
        return $this->imageMode;
    }

    /**
     * 创意类型
     * @param int $imageMode
     * @return self
     */
    public function setImageMode(?int $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 生服账号ID
     * @return int
     */
    public function getLifeAccountId(): ?int
    {
        return $this->lifeAccountId;
    }

    /**
     * 生服账号ID
     * @param int $lifeAccountId
     * @return self
     */
    public function setLifeAccountId(?int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 开屏类型
     * @return int
     */
    public function getSplashStyleType(): ?int
    {
        return $this->splashStyleType;
    }

    /**
     * 开屏类型
     * @param int $splashStyleType
     * @return self
     */
    public function setSplashStyleType(?int $splashStyleType): self
    {
        $this->splashStyleType = $splashStyleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->contentType !== null) {
            $result['content_type'] = $this->contentType;
        }
        if ($this->ecomActivityId !== null) {
            $result['ecom_activity_id'] = $this->ecomActivityId;
        }
        if ($this->groupType !== null) {
            $result['group_type'] = $this->groupType;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->lifeAccountId !== null) {
            $result['life_account_id'] = $this->lifeAccountId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->splashStyleType !== null) {
            $result['splash_style_type'] = $this->splashStyleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['content_type'] ?? null) !== null) {
            $obj->contentType = (int) $v;
        }
        if (($v = $data['ecom_activity_id'] ?? null) !== null) {
            $obj->ecomActivityId = (int) $v;
        }
        if (($v = $data['group_type'] ?? null) !== null) {
            $obj->groupType = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (int) $v;
        }
        if (($v = $data['life_account_id'] ?? null) !== null) {
            $obj->lifeAccountId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['splash_style_type'] ?? null) !== null) {
            $obj->splashStyleType = (int) $v;
        }
        return $obj;
    }
}
