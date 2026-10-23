<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialPushV30Request implements \JsonSerializable
{
    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\AicMaterialPushV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 待推送的广告主，数量限制：50，必须是推送广告主所属平台的广告主
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var \Oceanengine\Models\AicMaterialPushV30BussinessType
     */
    protected ?string $bussinessType = null;

    /**
     * 需要推送的视频，数量限制50
     * @var \Oceanengine\Models\AicMaterialPushV30RequestVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicMaterialPushV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AicMaterialPushV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 待推送的广告主，数量限制：50，必须是推送广告主所属平台的广告主
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 待推送的广告主，数量限制：50，必须是推送广告主所属平台的广告主
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicMaterialPushV30BussinessType
     */
    public function getBussinessType(): ?string
    {
        return $this->bussinessType;
    }

    /**
     * @param \Oceanengine\Models\AicMaterialPushV30BussinessType $bussinessType
     * @return self
     */
    public function setBussinessType(?string $bussinessType): self
    {
        $this->bussinessType = $bussinessType;
        return $this;
    }

    /**
     * 需要推送的视频，数量限制50
     * @return \Oceanengine\Models\AicMaterialPushV30RequestVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * 需要推送的视频，数量限制50
     * @param \Oceanengine\Models\AicMaterialPushV30RequestVideosInner[] $videos
     * @return self
     */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;
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
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->bussinessType !== null) {
            $result['bussiness_type'] = $this->bussinessType;
        }
        if ($this->videos !== null) {
            $result['videos'] = $this->videos;
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
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['bussiness_type'] ?? null) !== null) {
            $obj->bussinessType = (string) $v;
        }
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\AicMaterialPushV30RequestVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
