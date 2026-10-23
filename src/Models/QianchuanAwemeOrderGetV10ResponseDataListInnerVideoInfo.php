<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo implements \JsonSerializable
{
    /**
     * 视频封面
     * @var string
     */
    protected ?string $awemeItemCover = null;

    /**
     * 视频id
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $awemeItemTitle = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListVideoInfoItemType
     */
    protected ?string $itemType = null;

    /**
     * 视频封面
     * @return string
     */
    public function getAwemeItemCover(): ?string
    {
        return $this->awemeItemCover;
    }

    /**
     * 视频封面
     * @param string $awemeItemCover
     * @return self
     */
    public function setAwemeItemCover(?string $awemeItemCover): self
    {
        $this->awemeItemCover = $awemeItemCover;
        return $this;
    }

    /**
     * 视频id
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 视频id
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getAwemeItemTitle(): ?string
    {
        return $this->awemeItemTitle;
    }

    /**
     * 视频标题
     * @param string $awemeItemTitle
     * @return self
     */
    public function setAwemeItemTitle(?string $awemeItemTitle): self
    {
        $this->awemeItemTitle = $awemeItemTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListVideoInfoItemType
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListVideoInfoItemType $itemType
     * @return self
     */
    public function setItemType(?string $itemType): self
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemCover !== null) {
            $result['aweme_item_cover'] = $this->awemeItemCover;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->awemeItemTitle !== null) {
            $result['aweme_item_title'] = $this->awemeItemTitle;
        }
        if ($this->itemType !== null) {
            $result['item_type'] = $this->itemType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_cover'] ?? null) !== null) {
            $obj->awemeItemCover = (string) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['aweme_item_title'] ?? null) !== null) {
            $obj->awemeItemTitle = (string) $v;
        }
        if (($v = $data['item_type'] ?? null) !== null) {
            $obj->itemType = (string) $v;
        }
        return $obj;
    }
}
