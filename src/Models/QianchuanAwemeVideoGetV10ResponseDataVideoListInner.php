<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeVideoGetV10ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * 抖音短视频 ID
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * 评论数
     * @var int
     */
    protected ?int $commentCnt = null;

    /**
     * 视频发布时间，年月日时分秒
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 视频时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 视频高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 图集列表
     * @var string[]
     */
    protected ?array $imgUrl = null;

    /**
     * 是否为AI生成的视频
     * @var bool
     */
    protected ?bool $isAiCreate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsImage
     */
    protected ?string $isImage = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsRecommend
     */
    protected ?string $isRecommend = null;

    /**
     * 视频标签。短视频场景下下发
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * 点赞数
     * @var int
     */
    protected ?int $likeCnt = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo $productInfo = null;

    /**
     * 分享数
     * @var int
     */
    protected ?int $shareCnt = null;

    /**
     * 抖音中的视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频地址，链接1小时过期
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频封面图片url
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * 播放数
     * @var int
     */
    protected ?int $viewCnt = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 抖音短视频 ID
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * 抖音短视频 ID
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * 评论数
     * @return int
     */
    public function getCommentCnt(): ?int
    {
        return $this->commentCnt;
    }

    /**
     * 评论数
     * @param int $commentCnt
     * @return self
     */
    public function setCommentCnt(?int $commentCnt): self
    {
        $this->commentCnt = $commentCnt;
        return $this;
    }

    /**
     * 视频发布时间，年月日时分秒
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 视频发布时间，年月日时分秒
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 视频时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 视频时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 视频高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 视频高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 图集列表
     * @return string[]
     */
    public function getImgUrl(): ?array
    {
        return $this->imgUrl;
    }

    /**
     * 图集列表
     * @param string[] $imgUrl
     * @return self
     */
    public function setImgUrl(?array $imgUrl): self
    {
        $this->imgUrl = $imgUrl;
        return $this;
    }

    /**
     * 是否为AI生成的视频
     * @return bool
     */
    public function getIsAiCreate(): ?bool
    {
        return $this->isAiCreate;
    }

    /**
     * 是否为AI生成的视频
     * @param bool $isAiCreate
     * @return self
     */
    public function setIsAiCreate(?bool $isAiCreate): self
    {
        $this->isAiCreate = $isAiCreate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsImage
     */
    public function getIsImage(): ?string
    {
        return $this->isImage;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsImage $isImage
     * @return self
     */
    public function setIsImage(?string $isImage): self
    {
        $this->isImage = $isImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsRecommend
     */
    public function getIsRecommend(): ?string
    {
        return $this->isRecommend;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeVideoGetV10DataVideoListIsRecommend $isRecommend
     * @return self
     */
    public function setIsRecommend(?string $isRecommend): self
    {
        $this->isRecommend = $isRecommend;
        return $this;
    }

    /**
     * 视频标签。短视频场景下下发
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * 视频标签。短视频场景下下发
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * 点赞数
     * @return int
     */
    public function getLikeCnt(): ?int
    {
        return $this->likeCnt;
    }

    /**
     * 点赞数
     * @param int $likeCnt
     * @return self
     */
    public function setLikeCnt(?int $likeCnt): self
    {
        $this->likeCnt = $likeCnt;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * 分享数
     * @return int
     */
    public function getShareCnt(): ?int
    {
        return $this->shareCnt;
    }

    /**
     * 分享数
     * @param int $shareCnt
     * @return self
     */
    public function setShareCnt(?int $shareCnt): self
    {
        $this->shareCnt = $shareCnt;
        return $this;
    }

    /**
     * 抖音中的视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 抖音中的视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 视频地址，链接1小时过期
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频地址，链接1小时过期
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 视频封面图片url
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * 视频封面图片url
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
        return $this;
    }

    /**
     * 播放数
     * @return int
     */
    public function getViewCnt(): ?int
    {
        return $this->viewCnt;
    }

    /**
     * 播放数
     * @param int $viewCnt
     * @return self
     */
    public function setViewCnt(?int $viewCnt): self
    {
        $this->viewCnt = $viewCnt;
        return $this;
    }

    /**
     * 视频宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 视频宽度
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->commentCnt !== null) {
            $result['comment_cnt'] = $this->commentCnt;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->imgUrl !== null) {
            $result['img_url'] = $this->imgUrl;
        }
        if ($this->isAiCreate !== null) {
            $result['is_ai_create'] = $this->isAiCreate;
        }
        if ($this->isImage !== null) {
            $result['is_image'] = $this->isImage;
        }
        if ($this->isRecommend !== null) {
            $result['is_recommend'] = $this->isRecommend;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->likeCnt !== null) {
            $result['like_cnt'] = $this->likeCnt;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->shareCnt !== null) {
            $result['share_cnt'] = $this->shareCnt;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->viewCnt !== null) {
            $result['view_cnt'] = $this->viewCnt;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['comment_cnt'] ?? null) !== null) {
            $obj->commentCnt = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['img_url'] ?? null) !== null && is_array($v)) {
            $obj->imgUrl = $v;
        }
        if (($v = $data['is_ai_create'] ?? null) !== null) {
            $obj->isAiCreate = (bool) $v;
        }
        if (($v = $data['is_image'] ?? null) !== null) {
            $obj->isImage = (string) $v;
        }
        if (($v = $data['is_recommend'] ?? null) !== null) {
            $obj->isRecommend = (string) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['like_cnt'] ?? null) !== null) {
            $obj->likeCnt = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanAwemeVideoGetV10ResponseDataVideoListInnerProductInfo::fromArray($v);
        }
        if (($v = $data['share_cnt'] ?? null) !== null) {
            $obj->shareCnt = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['view_cnt'] ?? null) !== null) {
            $obj->viewCnt = (int) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
