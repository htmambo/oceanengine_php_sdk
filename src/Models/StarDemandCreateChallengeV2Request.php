<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo $challengeInfo = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo $demandInfo = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo
     */
    public function getChallengeInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo
    {
        return $this->challengeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo $challengeInfo
     * @return self
     */
    public function setChallengeInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo $challengeInfo): self
    {
        $this->challengeInfo = $challengeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
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
        if ($this->challengeInfo !== null) {
            $result['challenge_info'] = $this->challengeInfo;
        }
        if ($this->demandInfo !== null) {
            $result['demand_info'] = $this->demandInfo;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_info'] ?? null) !== null && is_array($v)) {
            $obj->challengeInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfo::fromArray($v);
        }
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfo::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
