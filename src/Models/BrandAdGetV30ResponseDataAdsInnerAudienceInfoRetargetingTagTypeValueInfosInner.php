<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValueInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $appIdList = null;

    /**
     * @var int[]
     */
    protected ?array $categoryList = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var int
     */
    protected ?int $expireTime = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $pullOffTagStatus = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAppIdList(): ?array
    {
        return $this->appIdList;
    }

    /**
     * @param int[] $appIdList
     * @return self
     */
    public function setAppIdList(?array $appIdList): self
    {
        $this->appIdList = $appIdList;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCategoryList(): ?array
    {
        return $this->categoryList;
    }

    /**
     * @param int[] $categoryList
     * @return self
     */
    public function setCategoryList(?array $categoryList): self
    {
        $this->categoryList = $categoryList;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * @param int $expireTime
     * @return self
     */
    public function setExpireTime(?int $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
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
    public function getPullOffTagStatus(): ?int
    {
        return $this->pullOffTagStatus;
    }

    /**
     * @param int $pullOffTagStatus
     * @return self
     */
    public function setPullOffTagStatus(?int $pullOffTagStatus): self
    {
        $this->pullOffTagStatus = $pullOffTagStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appIdList !== null) {
            $result['app_id_list'] = $this->appIdList;
        }
        if ($this->categoryList !== null) {
            $result['category_list'] = $this->categoryList;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->pullOffTagStatus !== null) {
            $result['pull_off_tag_status'] = $this->pullOffTagStatus;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_id_list'] ?? null) !== null && is_array($v)) {
            $obj->appIdList = $v;
        }
        if (($v = $data['category_list'] ?? null) !== null && is_array($v)) {
            $obj->categoryList = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['pull_off_tag_status'] ?? null) !== null) {
            $obj->pullOffTagStatus = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
