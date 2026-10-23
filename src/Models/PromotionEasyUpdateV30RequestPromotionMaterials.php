<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyUpdateV30RequestPromotionMaterials implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsCarouselMaterialListInner[]
     */
    protected ?array $carouselMaterialList = null;

    /**
     * 落地页链接，仅支持传入橙子落地页，落地页数量上限为1
     * @var \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsExternalUrlMaterialListInner[]
     */
    protected ?array $externalUrlMaterialList = null;

    /**
     * 标题，上限10个，单个标题字数限制[5-55]
     * @var \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsTitleMaterialListInner[]
     */
    protected ?array $titleMaterialList = null;

    /**
     * @var \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsVideoMaterialListInner[]
     */
    protected ?array $videoMaterialList = null;

    /**
     * @return \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsCarouselMaterialListInner[]
     */
    public function getCarouselMaterialList(): ?array
    {
        return $this->carouselMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsCarouselMaterialListInner[] $carouselMaterialList
     * @return self
     */
    public function setCarouselMaterialList(?array $carouselMaterialList): self
    {
        $this->carouselMaterialList = $carouselMaterialList;
        return $this;
    }

    /**
     * 落地页链接，仅支持传入橙子落地页，落地页数量上限为1
     * @return \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsExternalUrlMaterialListInner[]
     */
    public function getExternalUrlMaterialList(): ?array
    {
        return $this->externalUrlMaterialList;
    }

    /**
     * 落地页链接，仅支持传入橙子落地页，落地页数量上限为1
     * @param \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsExternalUrlMaterialListInner[] $externalUrlMaterialList
     * @return self
     */
    public function setExternalUrlMaterialList(?array $externalUrlMaterialList): self
    {
        $this->externalUrlMaterialList = $externalUrlMaterialList;
        return $this;
    }

    /**
     * 标题，上限10个，单个标题字数限制[5-55]
     * @return \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsTitleMaterialListInner[]
     */
    public function getTitleMaterialList(): ?array
    {
        return $this->titleMaterialList;
    }

    /**
     * 标题，上限10个，单个标题字数限制[5-55]
     * @param \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsTitleMaterialListInner[] $titleMaterialList
     * @return self
     */
    public function setTitleMaterialList(?array $titleMaterialList): self
    {
        $this->titleMaterialList = $titleMaterialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsVideoMaterialListInner[]
     */
    public function getVideoMaterialList(): ?array
    {
        return $this->videoMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsVideoMaterialListInner[] $videoMaterialList
     * @return self
     */
    public function setVideoMaterialList(?array $videoMaterialList): self
    {
        $this->videoMaterialList = $videoMaterialList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselMaterialList !== null) {
            $result['carousel_material_list'] = $this->carouselMaterialList;
        }
        if ($this->externalUrlMaterialList !== null) {
            $result['external_url_material_list'] = $this->externalUrlMaterialList;
        }
        if ($this->titleMaterialList !== null) {
            $result['title_material_list'] = $this->titleMaterialList;
        }
        if ($this->videoMaterialList !== null) {
            $result['video_material_list'] = $this->videoMaterialList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_material_list'] ?? null) !== null && is_array($v)) {
            $obj->carouselMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsCarouselMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['external_url_material_list'] ?? null) !== null && is_array($v)) {
            $obj->externalUrlMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsExternalUrlMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['title_material_list'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsTitleMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['video_material_list'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterialList = array_map(fn ($vv) => \Oceanengine\Models\PromotionEasyUpdateV30RequestPromotionMaterialsVideoMaterialListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
