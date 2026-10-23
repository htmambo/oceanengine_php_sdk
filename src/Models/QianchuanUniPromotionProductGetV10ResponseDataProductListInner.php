<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionProductGetV10ResponseDataProductListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditTime = null;

    /**
     * @var string
     */
    protected ?string $categoryName = null;

    /**
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionProductGetV10DataProductListChannelType
     */
    protected ?string $channelType = null;

    /**
     * @var string[]
     */
    protected ?array $grayReason = null;

    /**
     * 乘方创编商品列表，展示“星选素材”标
     * @var bool
     */
    protected ?bool $hasRelatedStarTask = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $img = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $sellNum = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionProductGetV10ResponseDataProductListInnerSquareImageListInner[]
     */
    protected ?array $squareImageList = null;

    /**
     * @var int
     */
    protected ?int $stockNum = null;

    /**
     * @var string[]
     */
    protected ?array $tag = null;

    /**
     * @return string
     */
    public function getAuditTime(): ?string
    {
        return $this->auditTime;
    }

    /**
     * @param string $auditTime
     * @return self
     */
    public function setAuditTime(?string $auditTime): self
    {
        $this->auditTime = $auditTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     * @return self
     */
    public function setChannelId(?int $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionProductGetV10DataProductListChannelType
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionProductGetV10DataProductListChannelType $channelType
     * @return self
     */
    public function setChannelType(?string $channelType): self
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGrayReason(): ?array
    {
        return $this->grayReason;
    }

    /**
     * @param string[] $grayReason
     * @return self
     */
    public function setGrayReason(?array $grayReason): self
    {
        $this->grayReason = $grayReason;
        return $this;
    }

    /**
     * 乘方创编商品列表，展示“星选素材”标
     * @return bool
     */
    public function getHasRelatedStarTask(): ?bool
    {
        return $this->hasRelatedStarTask;
    }

    /**
     * 乘方创编商品列表，展示“星选素材”标
     * @param bool $hasRelatedStarTask
     * @return self
     */
    public function setHasRelatedStarTask(?bool $hasRelatedStarTask): self
    {
        $this->hasRelatedStarTask = $hasRelatedStarTask;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return self
     */
    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellNum(): ?int
    {
        return $this->sellNum;
    }

    /**
     * @param int $sellNum
     * @return self
     */
    public function setSellNum(?int $sellNum): self
    {
        $this->sellNum = $sellNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionProductGetV10ResponseDataProductListInnerSquareImageListInner[]
     */
    public function getSquareImageList(): ?array
    {
        return $this->squareImageList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionProductGetV10ResponseDataProductListInnerSquareImageListInner[] $squareImageList
     * @return self
     */
    public function setSquareImageList(?array $squareImageList): self
    {
        $this->squareImageList = $squareImageList;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockNum(): ?int
    {
        return $this->stockNum;
    }

    /**
     * @param int $stockNum
     * @return self
     */
    public function setStockNum(?int $stockNum): self
    {
        $this->stockNum = $stockNum;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTag(): ?array
    {
        return $this->tag;
    }

    /**
     * @param string[] $tag
     * @return self
     */
    public function setTag(?array $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditTime !== null) {
            $result['audit_time'] = $this->auditTime;
        }
        if ($this->categoryName !== null) {
            $result['category_name'] = $this->categoryName;
        }
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->channelType !== null) {
            $result['channel_type'] = $this->channelType;
        }
        if ($this->grayReason !== null) {
            $result['gray_reason'] = $this->grayReason;
        }
        if ($this->hasRelatedStarTask !== null) {
            $result['has_related_star_task'] = $this->hasRelatedStarTask;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->sellNum !== null) {
            $result['sell_num'] = $this->sellNum;
        }
        if ($this->squareImageList !== null) {
            $result['square_image_list'] = $this->squareImageList;
        }
        if ($this->stockNum !== null) {
            $result['stock_num'] = $this->stockNum;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_time'] ?? null) !== null) {
            $obj->auditTime = (string) $v;
        }
        if (($v = $data['category_name'] ?? null) !== null) {
            $obj->categoryName = (string) $v;
        }
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (int) $v;
        }
        if (($v = $data['channel_type'] ?? null) !== null) {
            $obj->channelType = (string) $v;
        }
        if (($v = $data['gray_reason'] ?? null) !== null && is_array($v)) {
            $obj->grayReason = $v;
        }
        if (($v = $data['has_related_star_task'] ?? null) !== null) {
            $obj->hasRelatedStarTask = (bool) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['sell_num'] ?? null) !== null) {
            $obj->sellNum = (int) $v;
        }
        if (($v = $data['square_image_list'] ?? null) !== null && is_array($v)) {
            $obj->squareImageList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionProductGetV10ResponseDataProductListInnerSquareImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['stock_num'] ?? null) !== null) {
            $obj->stockNum = (int) $v;
        }
        if (($v = $data['tag'] ?? null) !== null && is_array($v)) {
            $obj->tag = $v;
        }
        return $obj;
    }
}
