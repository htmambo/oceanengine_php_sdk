<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarClueGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 地址
     * @var string
     */
    protected ?string $address = null;

    /**
     * 组件名称
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * 达人昵称
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 达人抖音短号
     * @var int
     */
    protected ?int $authorUid = null;

    /**
     * 车系
     * @var string
     */
    protected ?string $carSeries = null;

    /**
     * 车型
     * @var string
     */
    protected ?string $carType = null;

    /**
     * 城市
     * @var string
     */
    protected ?string $city = null;

    /**
     * @var \Oceanengine\Models\StarClueGetV2DataListComponentType
     */
    protected ?string $componentType = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 视频id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 姓名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 电话
     * @var string
     */
    protected ?string $phone = null;

    /**
     * 省会
     * @var string
     */
    protected ?string $province = null;

    /**
     * 客户id
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 地址
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 地址
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 组件名称
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * 组件名称
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * 达人昵称
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 达人昵称
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 达人抖音短号
     * @return int
     */
    public function getAuthorUid(): ?int
    {
        return $this->authorUid;
    }

    /**
     * 达人抖音短号
     * @param int $authorUid
     * @return self
     */
    public function setAuthorUid(?int $authorUid): self
    {
        $this->authorUid = $authorUid;
        return $this;
    }

    /**
     * 车系
     * @return string
     */
    public function getCarSeries(): ?string
    {
        return $this->carSeries;
    }

    /**
     * 车系
     * @param string $carSeries
     * @return self
     */
    public function setCarSeries(?string $carSeries): self
    {
        $this->carSeries = $carSeries;
        return $this;
    }

    /**
     * 车型
     * @return string
     */
    public function getCarType(): ?string
    {
        return $this->carType;
    }

    /**
     * 车型
     * @param string $carType
     * @return self
     */
    public function setCarType(?string $carType): self
    {
        $this->carType = $carType;
        return $this;
    }

    /**
     * 城市
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * 城市
     * @param string $city
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarClueGetV2DataListComponentType
     */
    public function getComponentType(): ?string
    {
        return $this->componentType;
    }

    /**
     * @param \Oceanengine\Models\StarClueGetV2DataListComponentType $componentType
     * @return self
     */
    public function setComponentType(?string $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 视频id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 姓名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 姓名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 订单id
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单id
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 电话
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * 电话
     * @param string $phone
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * 省会
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * 省会
     * @param string $province
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 客户id
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户id
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->authorUid !== null) {
            $result['author_uid'] = $this->authorUid;
        }
        if ($this->carSeries !== null) {
            $result['car_series'] = $this->carSeries;
        }
        if ($this->carType !== null) {
            $result['car_type'] = $this->carType;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['author_uid'] ?? null) !== null) {
            $obj->authorUid = (int) $v;
        }
        if (($v = $data['car_series'] ?? null) !== null) {
            $obj->carSeries = (string) $v;
        }
        if (($v = $data['car_type'] ?? null) !== null) {
            $obj->carType = (string) $v;
        }
        if (($v = $data['city'] ?? null) !== null) {
            $obj->city = (string) $v;
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['phone'] ?? null) !== null) {
            $obj->phone = (string) $v;
        }
        if (($v = $data['province'] ?? null) !== null) {
            $obj->province = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
