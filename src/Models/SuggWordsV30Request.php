<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SuggWordsV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 项目id
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\SuggWordsV30RequestPromotionMaterials
     */
    protected ?\Oceanengine\Models\SuggWordsV30RequestPromotionMaterials $promotionMaterials = null;

    /**
     * 以词推词，最多只传入10个，长度要求30字内 ,可传入行业名称获取行业推词
     * @var string[]
     */
    protected ?array $queryList = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 项目id
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目id
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SuggWordsV30RequestPromotionMaterials
     */
    public function getPromotionMaterials(): ?\Oceanengine\Models\SuggWordsV30RequestPromotionMaterials
    {
        return $this->promotionMaterials;
    }

    /**
     * @param \Oceanengine\Models\SuggWordsV30RequestPromotionMaterials $promotionMaterials
     * @return self
     */
    public function setPromotionMaterials(?\Oceanengine\Models\SuggWordsV30RequestPromotionMaterials $promotionMaterials): self
    {
        $this->promotionMaterials = $promotionMaterials;
        return $this;
    }

    /**
     * 以词推词，最多只传入10个，长度要求30字内 ,可传入行业名称获取行业推词
     * @return string[]
     */
    public function getQueryList(): ?array
    {
        return $this->queryList;
    }

    /**
     * 以词推词，最多只传入10个，长度要求30字内 ,可传入行业名称获取行业推词
     * @param string[] $queryList
     * @return self
     */
    public function setQueryList(?array $queryList): self
    {
        $this->queryList = $queryList;
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
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionMaterials !== null) {
            $result['promotion_materials'] = $this->promotionMaterials;
        }
        if ($this->queryList !== null) {
            $result['query_list'] = $this->queryList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_materials'] ?? null) !== null && is_array($v)) {
            $obj->promotionMaterials = \Oceanengine\Models\SuggWordsV30RequestPromotionMaterials::fromArray($v);
        }
        if (($v = $data['query_list'] ?? null) !== null && is_array($v)) {
            $obj->queryList = $v;
        }
        return $obj;
    }
}
