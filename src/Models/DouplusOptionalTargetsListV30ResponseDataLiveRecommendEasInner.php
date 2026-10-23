<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOptionalTargetsListV30ResponseDataLiveRecommendEasInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions[]
     */
    protected ?array $externalActions = null;

    /**
     * @var string
     */
    protected ?string $liveAwemeId = null;

    /**
     * @return \Oceanengine\Models\DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions[]
     */
    public function getExternalActions(): ?array
    {
        return $this->externalActions;
    }

    /**
     * @param \Oceanengine\Models\DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions[] $externalActions
     * @return self
     */
    public function setExternalActions(?array $externalActions): self
    {
        $this->externalActions = $externalActions;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiveAwemeId(): ?string
    {
        return $this->liveAwemeId;
    }

    /**
     * @param string $liveAwemeId
     * @return self
     */
    public function setLiveAwemeId(?string $liveAwemeId): self
    {
        $this->liveAwemeId = $liveAwemeId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalActions !== null) {
            $result['external_actions'] = $this->externalActions;
        }
        if ($this->liveAwemeId !== null) {
            $result['live_aweme_id'] = $this->liveAwemeId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_actions'] ?? null) !== null && is_array($v)) {
            $obj->externalActions = $v;
        }
        if (($v = $data['live_aweme_id'] ?? null) !== null) {
            $obj->liveAwemeId = (string) $v;
        }
        return $obj;
    }
}
