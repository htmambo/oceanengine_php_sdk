<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInner implements \JsonSerializable
{
    /**
     * 全部
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerAllInner[]
     */
    protected ?array $all = null;

    /**
     * 品牌
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerBrandInner[]
     */
    protected ?array $brand = null;

    /**
     * 角色
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerCharacterInner[]
     */
    protected ?array $character = null;

    /**
     * 痛点
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerPainInner[]
     */
    protected ?array $pain = null;

    /**
     * 产品
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerProductInner[]
     */
    protected ?array $product = null;

    /**
     * 场景
     * @var \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerSceneInner[]
     */
    protected ?array $scene = null;

    /**
     * 全部
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerAllInner[]
     */
    public function getAll(): ?array
    {
        return $this->all;
    }

    /**
     * 全部
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerAllInner[] $all
     * @return self
     */
    public function setAll(?array $all): self
    {
        $this->all = $all;
        return $this;
    }

    /**
     * 品牌
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerBrandInner[]
     */
    public function getBrand(): ?array
    {
        return $this->brand;
    }

    /**
     * 品牌
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerBrandInner[] $brand
     * @return self
     */
    public function setBrand(?array $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * 角色
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerCharacterInner[]
     */
    public function getCharacter(): ?array
    {
        return $this->character;
    }

    /**
     * 角色
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerCharacterInner[] $character
     * @return self
     */
    public function setCharacter(?array $character): self
    {
        $this->character = $character;
        return $this;
    }

    /**
     * 痛点
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerPainInner[]
     */
    public function getPain(): ?array
    {
        return $this->pain;
    }

    /**
     * 痛点
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerPainInner[] $pain
     * @return self
     */
    public function setPain(?array $pain): self
    {
        $this->pain = $pain;
        return $this;
    }

    /**
     * 产品
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerProductInner[]
     */
    public function getProduct(): ?array
    {
        return $this->product;
    }

    /**
     * 产品
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerProductInner[] $product
     * @return self
     */
    public function setProduct(?array $product): self
    {
        $this->product = $product;
        return $this;
    }

    /**
     * 场景
     * @return \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerSceneInner[]
     */
    public function getScene(): ?array
    {
        return $this->scene;
    }

    /**
     * 场景
     * @param \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerSceneInner[] $scene
     * @return self
     */
    public function setScene(?array $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->all !== null) {
            $result['all'] = $this->all;
        }
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->character !== null) {
            $result['character'] = $this->character;
        }
        if ($this->pain !== null) {
            $result['pain'] = $this->pain;
        }
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        if ($this->scene !== null) {
            $result['scene'] = $this->scene;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all'] ?? null) !== null && is_array($v)) {
            $obj->all = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerAllInner::fromArray($vv), $v);
        }
        if (($v = $data['brand'] ?? null) !== null && is_array($v)) {
            $obj->brand = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerBrandInner::fromArray($vv), $v);
        }
        if (($v = $data['character'] ?? null) !== null && is_array($v)) {
            $obj->character = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerCharacterInner::fromArray($vv), $v);
        }
        if (($v = $data['pain'] ?? null) !== null && is_array($v)) {
            $obj->pain = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerPainInner::fromArray($vv), $v);
        }
        if (($v = $data['product'] ?? null) !== null && is_array($v)) {
            $obj->product = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerProductInner::fromArray($vv), $v);
        }
        if (($v = $data['scene'] ?? null) !== null && is_array($v)) {
            $obj->scene = array_map(fn ($vv) => \Oceanengine\Models\StarReportOrderOverviewV2ResponseDataBaseStatsInnerSeedStatHotKeywordsInnerSceneInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
