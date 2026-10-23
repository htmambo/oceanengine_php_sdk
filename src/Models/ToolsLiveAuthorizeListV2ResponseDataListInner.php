<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLiveAuthorizeListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $authorizeEndTime = null;

    /**
     * @var string
     */
    protected ?string $authorizeStartTime = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $iesId = null;

    /**
     * @var string
     */
    protected ?string $iesUserName = null;

    /**
     * @var \Oceanengine\Models\ToolsLiveAuthorizeListV2ResponseDataListInnerLimitedPromotionTypesInner[]
     */
    protected ?array $limitedPromotionTypes = null;

    /**
     * @var \Oceanengine\Models\ToolsLiveAuthorizeListV2DataListStatus
     */
    protected ?string $status = null;

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
     * @return string
     */
    public function getAuthorizeEndTime(): ?string
    {
        return $this->authorizeEndTime;
    }

    /**
     * @param string $authorizeEndTime
     * @return self
     */
    public function setAuthorizeEndTime(?string $authorizeEndTime): self
    {
        $this->authorizeEndTime = $authorizeEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizeStartTime(): ?string
    {
        return $this->authorizeStartTime;
    }

    /**
     * @param string $authorizeStartTime
     * @return self
     */
    public function setAuthorizeStartTime(?string $authorizeStartTime): self
    {
        $this->authorizeStartTime = $authorizeStartTime;
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
     * @return string
     */
    public function getIesId(): ?string
    {
        return $this->iesId;
    }

    /**
     * @param string $iesId
     * @return self
     */
    public function setIesId(?string $iesId): self
    {
        $this->iesId = $iesId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIesUserName(): ?string
    {
        return $this->iesUserName;
    }

    /**
     * @param string $iesUserName
     * @return self
     */
    public function setIesUserName(?string $iesUserName): self
    {
        $this->iesUserName = $iesUserName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLiveAuthorizeListV2ResponseDataListInnerLimitedPromotionTypesInner[]
     */
    public function getLimitedPromotionTypes(): ?array
    {
        return $this->limitedPromotionTypes;
    }

    /**
     * @param \Oceanengine\Models\ToolsLiveAuthorizeListV2ResponseDataListInnerLimitedPromotionTypesInner[] $limitedPromotionTypes
     * @return self
     */
    public function setLimitedPromotionTypes(?array $limitedPromotionTypes): self
    {
        $this->limitedPromotionTypes = $limitedPromotionTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLiveAuthorizeListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsLiveAuthorizeListV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->authorizeEndTime !== null) {
            $result['authorize_end_time'] = $this->authorizeEndTime;
        }
        if ($this->authorizeStartTime !== null) {
            $result['authorize_start_time'] = $this->authorizeStartTime;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->iesId !== null) {
            $result['ies_id'] = $this->iesId;
        }
        if ($this->iesUserName !== null) {
            $result['ies_user_name'] = $this->iesUserName;
        }
        if ($this->limitedPromotionTypes !== null) {
            $result['limited_promotion_types'] = $this->limitedPromotionTypes;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['authorize_end_time'] ?? null) !== null) {
            $obj->authorizeEndTime = (string) $v;
        }
        if (($v = $data['authorize_start_time'] ?? null) !== null) {
            $obj->authorizeStartTime = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['ies_id'] ?? null) !== null) {
            $obj->iesId = (string) $v;
        }
        if (($v = $data['ies_user_name'] ?? null) !== null) {
            $obj->iesUserName = (string) $v;
        }
        if (($v = $data['limited_promotion_types'] ?? null) !== null && is_array($v)) {
            $obj->limitedPromotionTypes = array_map(fn ($vv) => \Oceanengine\Models\ToolsLiveAuthorizeListV2ResponseDataListInnerLimitedPromotionTypesInner::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
