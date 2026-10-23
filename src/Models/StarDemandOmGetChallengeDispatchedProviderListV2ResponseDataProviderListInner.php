<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeDispatchedProviderListV2ResponseDataProviderListInner implements \JsonSerializable
{
    /**
     * 是否可以和服务商取消合作
     * @var bool
     */
    protected ?bool $canCancelCooperate = null;

    /**
     * 服务商是否接单
     * @var bool
     */
    protected ?bool $hasProviderReceived = null;

    /**
     * @var int
     */
    protected ?int $providerId = null;

    /**
     * 是否可以和服务商取消合作
     * @return bool
     */
    public function getCanCancelCooperate(): ?bool
    {
        return $this->canCancelCooperate;
    }

    /**
     * 是否可以和服务商取消合作
     * @param bool $canCancelCooperate
     * @return self
     */
    public function setCanCancelCooperate(?bool $canCancelCooperate): self
    {
        $this->canCancelCooperate = $canCancelCooperate;
        return $this;
    }

    /**
     * 服务商是否接单
     * @return bool
     */
    public function getHasProviderReceived(): ?bool
    {
        return $this->hasProviderReceived;
    }

    /**
     * 服务商是否接单
     * @param bool $hasProviderReceived
     * @return self
     */
    public function setHasProviderReceived(?bool $hasProviderReceived): self
    {
        $this->hasProviderReceived = $hasProviderReceived;
        return $this;
    }

    /**
     * @return int
     */
    public function getProviderId(): ?int
    {
        return $this->providerId;
    }

    /**
     * @param int $providerId
     * @return self
     */
    public function setProviderId(?int $providerId): self
    {
        $this->providerId = $providerId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canCancelCooperate !== null) {
            $result['can_cancel_cooperate'] = $this->canCancelCooperate;
        }
        if ($this->hasProviderReceived !== null) {
            $result['has_provider_received'] = $this->hasProviderReceived;
        }
        if ($this->providerId !== null) {
            $result['provider_id'] = $this->providerId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_cancel_cooperate'] ?? null) !== null) {
            $obj->canCancelCooperate = (bool) $v;
        }
        if (($v = $data['has_provider_received'] ?? null) !== null) {
            $obj->hasProviderReceived = (bool) $v;
        }
        if (($v = $data['provider_id'] ?? null) !== null) {
            $obj->providerId = (int) $v;
        }
        return $obj;
    }
}
