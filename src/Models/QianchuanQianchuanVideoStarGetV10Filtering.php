<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanQianchuanVideoStarGetV10Filtering implements \JsonSerializable
{
    /**
     * 需拉取视频的抖音号，默认查询全部，数量限制xxx个 注意：这里的抖音号为在星图侧adv绑定的抖音号
     * @var int[]
     */
    protected ?array $awemeIds = null;

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @var int[]
     */
    protected ?array $awemeItemIds = null;

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @var string
     */
    protected ?string $awemeItemTitleUrl = null;

    /**
     * 素材id，抖音主页视频用来投放才会有，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 需拉取视频的抖音号，默认查询全部，数量限制xxx个 注意：这里的抖音号为在星图侧adv绑定的抖音号
     * @return int[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * 需拉取视频的抖音号，默认查询全部，数量限制xxx个 注意：这里的抖音号为在星图侧adv绑定的抖音号
     * @param int[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @return int[]
     */
    public function getAwemeItemIds(): ?array
    {
        return $this->awemeItemIds;
    }

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @param int[] $awemeItemIds
     * @return self
     */
    public function setAwemeItemIds(?array $awemeItemIds): self
    {
        $this->awemeItemIds = $awemeItemIds;
        return $this;
    }

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @return string
     */
    public function getAwemeItemTitleUrl(): ?string
    {
        return $this->awemeItemTitleUrl;
    }

    /**
     * 抖音主页视频id，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @param string $awemeItemTitleUrl
     * @return self
     */
    public function setAwemeItemTitleUrl(?string $awemeItemTitleUrl): self
    {
        $this->awemeItemTitleUrl = $awemeItemTitleUrl;
        return $this;
    }

    /**
     * 素材id，抖音主页视频用来投放才会有，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材id，抖音主页视频用来投放才会有，限制0-50 注意：material_ids、aweme_item_id、aweme_item_title_url只能选择一个进行过滤，否则可能会查询不到数据
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->awemeItemIds !== null) {
            $result['aweme_item_ids'] = $this->awemeItemIds;
        }
        if ($this->awemeItemTitleUrl !== null) {
            $result['aweme_item_title_url'] = $this->awemeItemTitleUrl;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['aweme_item_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeItemIds = $v;
        }
        if (($v = $data['aweme_item_title_url'] ?? null) !== null) {
            $obj->awemeItemTitleUrl = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        return $obj;
    }
}
