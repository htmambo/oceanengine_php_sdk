<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton $button = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon $coupon = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm $form = null;

    /**
     * 组件在模板中的位置描述
     * @var string
     */
    protected ?string $index = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture $picture = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup $pictureGroup = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText $text = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksType
     */
    protected ?string $type = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo $video = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet $wechatApplet = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame $wechatGame = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton
     */
    public function getButton(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton $button
     * @return self
     */
    public function setButton(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm
     */
    public function getForm(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm
    {
        return $this->form;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm $form
     * @return self
     */
    public function setForm(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * 组件在模板中的位置描述
     * @return string
     */
    public function getIndex(): ?string
    {
        return $this->index;
    }

    /**
     * 组件在模板中的位置描述
     * @param string $index
     * @return self
     */
    public function setIndex(?string $index): self
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture
     */
    public function getPicture(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture
    {
        return $this->picture;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture $picture
     * @return self
     */
    public function setPicture(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture $picture): self
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup
     */
    public function getPictureGroup(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup
    {
        return $this->pictureGroup;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup $pictureGroup
     * @return self
     */
    public function setPictureGroup(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup $pictureGroup): self
    {
        $this->pictureGroup = $pictureGroup;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText
     */
    public function getText(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText
    {
        return $this->text;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText $text
     * @return self
     */
    public function setText(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2DataListBricksType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo
     */
    public function getVideo(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet
     */
    public function getWechatApplet(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet
    {
        return $this->wechatApplet;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet $wechatApplet
     * @return self
     */
    public function setWechatApplet(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet $wechatApplet): self
    {
        $this->wechatApplet = $wechatApplet;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame
     */
    public function getWechatGame(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame
    {
        return $this->wechatGame;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame $wechatGame
     * @return self
     */
    public function setWechatGame(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame $wechatGame): self
    {
        $this->wechatGame = $wechatGame;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->button !== null) {
            $result['button'] = $this->button;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        if ($this->form !== null) {
            $result['form'] = $this->form;
        }
        if ($this->index !== null) {
            $result['index'] = $this->index;
        }
        if ($this->picture !== null) {
            $result['picture'] = $this->picture;
        }
        if ($this->pictureGroup !== null) {
            $result['picture_group'] = $this->pictureGroup;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        if ($this->wechatApplet !== null) {
            $result['wechat_applet'] = $this->wechatApplet;
        }
        if ($this->wechatGame !== null) {
            $result['wechat_game'] = $this->wechatGame;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button'] ?? null) !== null && is_array($v)) {
            $obj->button = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButton::fromArray($v);
        }
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerCoupon::fromArray($v);
        }
        if (($v = $data['form'] ?? null) !== null && is_array($v)) {
            $obj->form = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerForm::fromArray($v);
        }
        if (($v = $data['index'] ?? null) !== null) {
            $obj->index = (string) $v;
        }
        if (($v = $data['picture'] ?? null) !== null && is_array($v)) {
            $obj->picture = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPicture::fromArray($v);
        }
        if (($v = $data['picture_group'] ?? null) !== null && is_array($v)) {
            $obj->pictureGroup = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerPictureGroup::fromArray($v);
        }
        if (($v = $data['text'] ?? null) !== null && is_array($v)) {
            $obj->text = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerText::fromArray($v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerVideo::fromArray($v);
        }
        if (($v = $data['wechat_applet'] ?? null) !== null && is_array($v)) {
            $obj->wechatApplet = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatApplet::fromArray($v);
        }
        if (($v = $data['wechat_game'] ?? null) !== null && is_array($v)) {
            $obj->wechatGame = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerWechatGame::fromArray($v);
        }
        return $obj;
    }
}
