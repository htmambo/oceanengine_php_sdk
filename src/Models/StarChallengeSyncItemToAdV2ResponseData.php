<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeSyncItemToAdV2ResponseData implements \JsonSerializable
{
    /**
     * 是否存在成功的推送
     * @var bool
     */
    protected ?bool $existSuccessSync = null;

    /**
     * 推送失败的原因
     * @var \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataFailSyncReasonInner[]
     */
    protected ?array $failSyncReason = null;

    /**
     * 推送详情，格式等同于素材集市
     * @var \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataSyncDetailsInner[]
     */
    protected ?array $syncDetails = null;

    /**
     * 是否存在成功的推送
     * @return bool
     */
    public function getExistSuccessSync(): ?bool
    {
        return $this->existSuccessSync;
    }

    /**
     * 是否存在成功的推送
     * @param bool $existSuccessSync
     * @return self
     */
    public function setExistSuccessSync(?bool $existSuccessSync): self
    {
        $this->existSuccessSync = $existSuccessSync;
        return $this;
    }

    /**
     * 推送失败的原因
     * @return \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataFailSyncReasonInner[]
     */
    public function getFailSyncReason(): ?array
    {
        return $this->failSyncReason;
    }

    /**
     * 推送失败的原因
     * @param \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataFailSyncReasonInner[] $failSyncReason
     * @return self
     */
    public function setFailSyncReason(?array $failSyncReason): self
    {
        $this->failSyncReason = $failSyncReason;
        return $this;
    }

    /**
     * 推送详情，格式等同于素材集市
     * @return \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataSyncDetailsInner[]
     */
    public function getSyncDetails(): ?array
    {
        return $this->syncDetails;
    }

    /**
     * 推送详情，格式等同于素材集市
     * @param \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataSyncDetailsInner[] $syncDetails
     * @return self
     */
    public function setSyncDetails(?array $syncDetails): self
    {
        $this->syncDetails = $syncDetails;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->existSuccessSync !== null) {
            $result['exist_success_sync'] = $this->existSuccessSync;
        }
        if ($this->failSyncReason !== null) {
            $result['fail_sync_reason'] = $this->failSyncReason;
        }
        if ($this->syncDetails !== null) {
            $result['sync_details'] = $this->syncDetails;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['exist_success_sync'] ?? null) !== null) {
            $obj->existSuccessSync = (bool) $v;
        }
        if (($v = $data['fail_sync_reason'] ?? null) !== null && is_array($v)) {
            $obj->failSyncReason = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataFailSyncReasonInner::fromArray($vv), $v);
        }
        if (($v = $data['sync_details'] ?? null) !== null && is_array($v)) {
            $obj->syncDetails = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeSyncItemToAdV2ResponseDataSyncDetailsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
