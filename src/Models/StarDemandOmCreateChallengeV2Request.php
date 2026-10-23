<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo $challengeInfo = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo $demandInfo = null;

    /**
     * @var int
     */
    protected ?int $developerId = null;

    /**
     * 客户星图ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo
     */
    public function getChallengeInfo(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo
    {
        return $this->challengeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo $challengeInfo
     * @return self
     */
    public function setChallengeInfo(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo $challengeInfo): self
    {
        $this->challengeInfo = $challengeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeveloperId(): ?int
    {
        return $this->developerId;
    }

    /**
     * @param int $developerId
     * @return self
     */
    public function setDeveloperId(?int $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    /**
     * 客户星图ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户星图ID
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
        if ($this->developerId !== null) {
            $result['developer_id'] = $this->developerId;
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
            $obj->challengeInfo = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfo::fromArray($v);
        }
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfo::fromArray($v);
        }
        if (($v = $data['developer_id'] ?? null) !== null) {
            $obj->developerId = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
