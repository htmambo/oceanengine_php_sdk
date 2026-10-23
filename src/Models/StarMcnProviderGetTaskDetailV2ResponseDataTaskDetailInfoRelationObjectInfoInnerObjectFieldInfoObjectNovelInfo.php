<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfo implements \JsonSerializable
{
    /**
     * 书籍作者
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 一级分类名称
     * @var string
     */
    protected ?string $categoryFirstName = null;

    /**
     * 二级分类名称
     * @var string
     */
    protected ?string $categorySecondName = null;

    /**
     * 三级分类名称
     * @var string
     */
    protected ?string $categoryThirdName = null;

    /**
     * 内容文件（txt/网盘链接等），需要自定义Node
     * @var string
     */
    protected ?string $contentFileUrl = null;

    /**
     * 版权方
     * @var string
     */
    protected ?string $copyrightOwner = null;

    /**
     * 版权资质
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoCopyrightQualificationInner[]
     */
    protected ?array $copyrightQualification = null;

    /**
     * 书籍男女频（枚举）
     * @var int
     */
    protected ?int $genderCategory = null;

    /**
     * 书籍长短篇（枚举）
     * @var int
     */
    protected ?int $lengthType = null;

    /**
     * 小说附件描述
     * @var string
     */
    protected ?string $novelAttachmentComment = null;

    /**
     * 小说附件
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoNovelAttachmentListInner[]
     */
    protected ?array $novelAttachmentList = null;

    /**
     * 书籍图片
     * @var string
     */
    protected ?string $novelCoverUrl = null;

    /**
     * 小说ID
     * @var int
     */
    protected ?int $novelId = null;

    /**
     * 书籍简介
     * @var string
     */
    protected ?string $novelIntro = null;

    /**
     * 书籍名称
     * @var string
     */
    protected ?string $novelName = null;

    /**
     * 全篇字数
     * @var int
     */
    protected ?int $totalWordCount = null;

    /**
     * 书籍作者
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 书籍作者
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 一级分类名称
     * @return string
     */
    public function getCategoryFirstName(): ?string
    {
        return $this->categoryFirstName;
    }

    /**
     * 一级分类名称
     * @param string $categoryFirstName
     * @return self
     */
    public function setCategoryFirstName(?string $categoryFirstName): self
    {
        $this->categoryFirstName = $categoryFirstName;
        return $this;
    }

    /**
     * 二级分类名称
     * @return string
     */
    public function getCategorySecondName(): ?string
    {
        return $this->categorySecondName;
    }

    /**
     * 二级分类名称
     * @param string $categorySecondName
     * @return self
     */
    public function setCategorySecondName(?string $categorySecondName): self
    {
        $this->categorySecondName = $categorySecondName;
        return $this;
    }

    /**
     * 三级分类名称
     * @return string
     */
    public function getCategoryThirdName(): ?string
    {
        return $this->categoryThirdName;
    }

    /**
     * 三级分类名称
     * @param string $categoryThirdName
     * @return self
     */
    public function setCategoryThirdName(?string $categoryThirdName): self
    {
        $this->categoryThirdName = $categoryThirdName;
        return $this;
    }

    /**
     * 内容文件（txt/网盘链接等），需要自定义Node
     * @return string
     */
    public function getContentFileUrl(): ?string
    {
        return $this->contentFileUrl;
    }

    /**
     * 内容文件（txt/网盘链接等），需要自定义Node
     * @param string $contentFileUrl
     * @return self
     */
    public function setContentFileUrl(?string $contentFileUrl): self
    {
        $this->contentFileUrl = $contentFileUrl;
        return $this;
    }

    /**
     * 版权方
     * @return string
     */
    public function getCopyrightOwner(): ?string
    {
        return $this->copyrightOwner;
    }

    /**
     * 版权方
     * @param string $copyrightOwner
     * @return self
     */
    public function setCopyrightOwner(?string $copyrightOwner): self
    {
        $this->copyrightOwner = $copyrightOwner;
        return $this;
    }

    /**
     * 版权资质
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoCopyrightQualificationInner[]
     */
    public function getCopyrightQualification(): ?array
    {
        return $this->copyrightQualification;
    }

    /**
     * 版权资质
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoCopyrightQualificationInner[] $copyrightQualification
     * @return self
     */
    public function setCopyrightQualification(?array $copyrightQualification): self
    {
        $this->copyrightQualification = $copyrightQualification;
        return $this;
    }

    /**
     * 书籍男女频（枚举）
     * @return int
     */
    public function getGenderCategory(): ?int
    {
        return $this->genderCategory;
    }

    /**
     * 书籍男女频（枚举）
     * @param int $genderCategory
     * @return self
     */
    public function setGenderCategory(?int $genderCategory): self
    {
        $this->genderCategory = $genderCategory;
        return $this;
    }

    /**
     * 书籍长短篇（枚举）
     * @return int
     */
    public function getLengthType(): ?int
    {
        return $this->lengthType;
    }

    /**
     * 书籍长短篇（枚举）
     * @param int $lengthType
     * @return self
     */
    public function setLengthType(?int $lengthType): self
    {
        $this->lengthType = $lengthType;
        return $this;
    }

    /**
     * 小说附件描述
     * @return string
     */
    public function getNovelAttachmentComment(): ?string
    {
        return $this->novelAttachmentComment;
    }

    /**
     * 小说附件描述
     * @param string $novelAttachmentComment
     * @return self
     */
    public function setNovelAttachmentComment(?string $novelAttachmentComment): self
    {
        $this->novelAttachmentComment = $novelAttachmentComment;
        return $this;
    }

    /**
     * 小说附件
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoNovelAttachmentListInner[]
     */
    public function getNovelAttachmentList(): ?array
    {
        return $this->novelAttachmentList;
    }

    /**
     * 小说附件
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoNovelAttachmentListInner[] $novelAttachmentList
     * @return self
     */
    public function setNovelAttachmentList(?array $novelAttachmentList): self
    {
        $this->novelAttachmentList = $novelAttachmentList;
        return $this;
    }

    /**
     * 书籍图片
     * @return string
     */
    public function getNovelCoverUrl(): ?string
    {
        return $this->novelCoverUrl;
    }

    /**
     * 书籍图片
     * @param string $novelCoverUrl
     * @return self
     */
    public function setNovelCoverUrl(?string $novelCoverUrl): self
    {
        $this->novelCoverUrl = $novelCoverUrl;
        return $this;
    }

    /**
     * 小说ID
     * @return int
     */
    public function getNovelId(): ?int
    {
        return $this->novelId;
    }

    /**
     * 小说ID
     * @param int $novelId
     * @return self
     */
    public function setNovelId(?int $novelId): self
    {
        $this->novelId = $novelId;
        return $this;
    }

    /**
     * 书籍简介
     * @return string
     */
    public function getNovelIntro(): ?string
    {
        return $this->novelIntro;
    }

    /**
     * 书籍简介
     * @param string $novelIntro
     * @return self
     */
    public function setNovelIntro(?string $novelIntro): self
    {
        $this->novelIntro = $novelIntro;
        return $this;
    }

    /**
     * 书籍名称
     * @return string
     */
    public function getNovelName(): ?string
    {
        return $this->novelName;
    }

    /**
     * 书籍名称
     * @param string $novelName
     * @return self
     */
    public function setNovelName(?string $novelName): self
    {
        $this->novelName = $novelName;
        return $this;
    }

    /**
     * 全篇字数
     * @return int
     */
    public function getTotalWordCount(): ?int
    {
        return $this->totalWordCount;
    }

    /**
     * 全篇字数
     * @param int $totalWordCount
     * @return self
     */
    public function setTotalWordCount(?int $totalWordCount): self
    {
        $this->totalWordCount = $totalWordCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->categoryFirstName !== null) {
            $result['category_first_name'] = $this->categoryFirstName;
        }
        if ($this->categorySecondName !== null) {
            $result['category_second_name'] = $this->categorySecondName;
        }
        if ($this->categoryThirdName !== null) {
            $result['category_third_name'] = $this->categoryThirdName;
        }
        if ($this->contentFileUrl !== null) {
            $result['content_file_url'] = $this->contentFileUrl;
        }
        if ($this->copyrightOwner !== null) {
            $result['copyright_owner'] = $this->copyrightOwner;
        }
        if ($this->copyrightQualification !== null) {
            $result['copyright_qualification'] = $this->copyrightQualification;
        }
        if ($this->genderCategory !== null) {
            $result['gender_category'] = $this->genderCategory;
        }
        if ($this->lengthType !== null) {
            $result['length_type'] = $this->lengthType;
        }
        if ($this->novelAttachmentComment !== null) {
            $result['novel_attachment_comment'] = $this->novelAttachmentComment;
        }
        if ($this->novelAttachmentList !== null) {
            $result['novel_attachment_list'] = $this->novelAttachmentList;
        }
        if ($this->novelCoverUrl !== null) {
            $result['novel_cover_url'] = $this->novelCoverUrl;
        }
        if ($this->novelId !== null) {
            $result['novel_id'] = $this->novelId;
        }
        if ($this->novelIntro !== null) {
            $result['novel_intro'] = $this->novelIntro;
        }
        if ($this->novelName !== null) {
            $result['novel_name'] = $this->novelName;
        }
        if ($this->totalWordCount !== null) {
            $result['total_word_count'] = $this->totalWordCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['category_first_name'] ?? null) !== null) {
            $obj->categoryFirstName = (string) $v;
        }
        if (($v = $data['category_second_name'] ?? null) !== null) {
            $obj->categorySecondName = (string) $v;
        }
        if (($v = $data['category_third_name'] ?? null) !== null) {
            $obj->categoryThirdName = (string) $v;
        }
        if (($v = $data['content_file_url'] ?? null) !== null) {
            $obj->contentFileUrl = (string) $v;
        }
        if (($v = $data['copyright_owner'] ?? null) !== null) {
            $obj->copyrightOwner = (string) $v;
        }
        if (($v = $data['copyright_qualification'] ?? null) !== null && is_array($v)) {
            $obj->copyrightQualification = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoCopyrightQualificationInner::fromArray($vv), $v);
        }
        if (($v = $data['gender_category'] ?? null) !== null) {
            $obj->genderCategory = (int) $v;
        }
        if (($v = $data['length_type'] ?? null) !== null) {
            $obj->lengthType = (int) $v;
        }
        if (($v = $data['novel_attachment_comment'] ?? null) !== null) {
            $obj->novelAttachmentComment = (string) $v;
        }
        if (($v = $data['novel_attachment_list'] ?? null) !== null && is_array($v)) {
            $obj->novelAttachmentList = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoNovelAttachmentListInner::fromArray($vv), $v);
        }
        if (($v = $data['novel_cover_url'] ?? null) !== null) {
            $obj->novelCoverUrl = (string) $v;
        }
        if (($v = $data['novel_id'] ?? null) !== null) {
            $obj->novelId = (int) $v;
        }
        if (($v = $data['novel_intro'] ?? null) !== null) {
            $obj->novelIntro = (string) $v;
        }
        if (($v = $data['novel_name'] ?? null) !== null) {
            $obj->novelName = (string) $v;
        }
        if (($v = $data['total_word_count'] ?? null) !== null) {
            $obj->totalWordCount = (int) $v;
        }
        return $obj;
    }
}
