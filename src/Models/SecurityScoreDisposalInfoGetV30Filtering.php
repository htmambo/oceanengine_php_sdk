<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreDisposalInfoGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalAction
     */
    protected ?string $disposalAction = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalStatus
     */
    protected ?string $disposalStatus = null;

    /**
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalAction
     */
    public function getDisposalAction(): ?string
    {
        return $this->disposalAction;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalAction $disposalAction
     * @return self
     */
    public function setDisposalAction(?string $disposalAction): self
    {
        $this->disposalAction = $disposalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalStatus
     */
    public function getDisposalStatus(): ?string
    {
        return $this->disposalStatus;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30FilteringDisposalStatus $disposalStatus
     * @return self
     */
    public function setDisposalStatus(?string $disposalStatus): self
    {
        $this->disposalStatus = $disposalStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->disposalAction !== null) {
            $result['disposal_action'] = $this->disposalAction;
        }
        if ($this->disposalStatus !== null) {
            $result['disposal_status'] = $this->disposalStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['disposal_action'] ?? null) !== null) {
            $obj->disposalAction = (string) $v;
        }
        if (($v = $data['disposal_status'] ?? null) !== null) {
            $obj->disposalStatus = (string) $v;
        }
        return $obj;
    }
}
