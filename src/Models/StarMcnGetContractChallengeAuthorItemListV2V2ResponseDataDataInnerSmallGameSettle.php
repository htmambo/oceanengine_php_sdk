<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle implements \JsonSerializable
{
    /**
     * 达人预估cps收入（付费分佣金额）
     * @var int
     */
    protected ?int $authorCpsReward = null;

    /**
     * 达人计费自然播放量
     * @var int
     */
    protected ?int $authorNaturalVv = null;

    /**
     * 客户cps流水 （付费流水金额）
     * @var int
     */
    protected ?int $demanderCpsTurnover = null;

    /**
     * 客户预估消耗（视频消耗）
     * @var int
     */
    protected ?int $demanderEstCost = null;

    /**
     * 达人预估cps收入（付费分佣金额）
     * @return int
     */
    public function getAuthorCpsReward(): ?int
    {
        return $this->authorCpsReward;
    }

    /**
     * 达人预估cps收入（付费分佣金额）
     * @param int $authorCpsReward
     * @return self
     */
    public function setAuthorCpsReward(?int $authorCpsReward): self
    {
        $this->authorCpsReward = $authorCpsReward;
        return $this;
    }

    /**
     * 达人计费自然播放量
     * @return int
     */
    public function getAuthorNaturalVv(): ?int
    {
        return $this->authorNaturalVv;
    }

    /**
     * 达人计费自然播放量
     * @param int $authorNaturalVv
     * @return self
     */
    public function setAuthorNaturalVv(?int $authorNaturalVv): self
    {
        $this->authorNaturalVv = $authorNaturalVv;
        return $this;
    }

    /**
     * 客户cps流水 （付费流水金额）
     * @return int
     */
    public function getDemanderCpsTurnover(): ?int
    {
        return $this->demanderCpsTurnover;
    }

    /**
     * 客户cps流水 （付费流水金额）
     * @param int $demanderCpsTurnover
     * @return self
     */
    public function setDemanderCpsTurnover(?int $demanderCpsTurnover): self
    {
        $this->demanderCpsTurnover = $demanderCpsTurnover;
        return $this;
    }

    /**
     * 客户预估消耗（视频消耗）
     * @return int
     */
    public function getDemanderEstCost(): ?int
    {
        return $this->demanderEstCost;
    }

    /**
     * 客户预估消耗（视频消耗）
     * @param int $demanderEstCost
     * @return self
     */
    public function setDemanderEstCost(?int $demanderEstCost): self
    {
        $this->demanderEstCost = $demanderEstCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorCpsReward !== null) {
            $result['author_cps_reward'] = $this->authorCpsReward;
        }
        if ($this->authorNaturalVv !== null) {
            $result['author_natural_vv'] = $this->authorNaturalVv;
        }
        if ($this->demanderCpsTurnover !== null) {
            $result['demander_cps_turnover'] = $this->demanderCpsTurnover;
        }
        if ($this->demanderEstCost !== null) {
            $result['demander_est_cost'] = $this->demanderEstCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_cps_reward'] ?? null) !== null) {
            $obj->authorCpsReward = (int) $v;
        }
        if (($v = $data['author_natural_vv'] ?? null) !== null) {
            $obj->authorNaturalVv = (int) $v;
        }
        if (($v = $data['demander_cps_turnover'] ?? null) !== null) {
            $obj->demanderCpsTurnover = (int) $v;
        }
        if (($v = $data['demander_est_cost'] ?? null) !== null) {
            $obj->demanderEstCost = (int) $v;
        }
        return $obj;
    }
}
