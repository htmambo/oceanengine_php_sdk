<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmExpandChallengeProviderV2ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,string>
     */
    protected ?array $failedProviderReason = null;

    /**
     * @return array<string,string>
     */
    public function getFailedProviderReason(): ?array
    {
        return $this->failedProviderReason;
    }

    /**
     * @param array<string,string> $failedProviderReason
     * @return self
     */
    public function setFailedProviderReason(?array $failedProviderReason): self
    {
        $this->failedProviderReason = $failedProviderReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedProviderReason !== null) {
            $result['failed_provider_reason'] = $this->failedProviderReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_provider_reason'] ?? null) !== null && is_array($v)) {
            $obj->failedProviderReason = $v;
        }
        return $obj;
    }
}
