<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmExpandChallengeProviderV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange
     */
    protected ?\Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange $omParticipateProviderRange = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange
     */
    public function getOmParticipateProviderRange(): ?\Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange
    {
        return $this->omParticipateProviderRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange $omParticipateProviderRange
     * @return self
     */
    public function setOmParticipateProviderRange(?\Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange $omParticipateProviderRange): self
    {
        $this->omParticipateProviderRange = $omParticipateProviderRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->omParticipateProviderRange !== null) {
            $result['om_participate_provider_range'] = $this->omParticipateProviderRange;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['om_participate_provider_range'] ?? null) !== null && is_array($v)) {
            $obj->omParticipateProviderRange = \Oceanengine\Models\StarDemandOmExpandChallengeProviderV2RequestOmParticipateProviderRange::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
