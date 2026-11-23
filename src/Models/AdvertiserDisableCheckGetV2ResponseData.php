<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDisableCheckGetV2ResponseData implements \JsonSerializable
{
    /**
     * 投放账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 各检查点的结果，checkpoint-success
     * @var \Oceanengine\Models\AdvertiserDisableCheckGetV2ResponseDataCheckpointsInner[]
     */
    protected ?array $checkpoints = null;

    /**
     * 检查结果，true：表示通过所有前置检查点校验，false：表示至少有一个前置检查点未通过；
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 投放账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 投放账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 各检查点的结果，checkpoint-success
     * @return \Oceanengine\Models\AdvertiserDisableCheckGetV2ResponseDataCheckpointsInner[]
     */
    public function getCheckpoints(): ?array
    {
        return $this->checkpoints;
    }

    /**
     * 各检查点的结果，checkpoint-success
     * @param \Oceanengine\Models\AdvertiserDisableCheckGetV2ResponseDataCheckpointsInner[] $checkpoints
     * @return self
     */
    public function setCheckpoints(?array $checkpoints): self
    {
        $this->checkpoints = $checkpoints;
        return $this;
    }

    /**
     * 检查结果，true：表示通过所有前置检查点校验，false：表示至少有一个前置检查点未通过；
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 检查结果，true：表示通过所有前置检查点校验，false：表示至少有一个前置检查点未通过；
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
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
        if ($this->checkpoints !== null) {
            $result['checkpoints'] = $this->checkpoints;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['checkpoints'] ?? null) !== null && is_array($v)) {
            $obj->checkpoints = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDisableCheckGetV2ResponseDataCheckpointsInner::fromArray($vv), $v);
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
