<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType
     */
    protected ?string $operationType = null;

    /**
     * @var int[]
     */
    protected ?array $providerIds = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType
     */
    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType $operationType
     * @return self
     */
    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProviderIds(): ?array
    {
        return $this->providerIds;
    }

    /**
     * @param int[] $providerIds
     * @return self
     */
    public function setProviderIds(?array $providerIds): self
    {
        $this->providerIds = $providerIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->operationType !== null) {
            $result['operation_type'] = $this->operationType;
        }
        if ($this->providerIds !== null) {
            $result['provider_ids'] = $this->providerIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['operation_type'] ?? null) !== null) {
            $obj->operationType = (string) $v;
        }
        if (($v = $data['provider_ids'] ?? null) !== null && is_array($v)) {
            $obj->providerIds = $v;
        }
        return $obj;
    }
}
