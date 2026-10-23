<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton $button = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon $coupon = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm $form = null;

    /**
     * 组件在模板中的位置描述
     * @var string
     */
    protected ?string $index = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture $picture = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup $pictureGroup = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText $text = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksType
     */
    protected ?string $type = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo $video = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet $wechatApplet = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame $wechatGame = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton
     */
    public function getButton(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton $button
     * @return self
     */
    public function setButton(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm
     */
    public function getForm(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm
    {
        return $this->form;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm $form
     * @return self
     */
    public function setForm(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm $form): self
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
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture
     */
    public function getPicture(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture
    {
        return $this->picture;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture $picture
     * @return self
     */
    public function setPicture(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture $picture): self
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup
     */
    public function getPictureGroup(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup
    {
        return $this->pictureGroup;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup $pictureGroup
     * @return self
     */
    public function setPictureGroup(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup $pictureGroup): self
    {
        $this->pictureGroup = $pictureGroup;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText
     */
    public function getText(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText
    {
        return $this->text;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText $text
     * @return self
     */
    public function setText(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2DataBricksType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo
     */
    public function getVideo(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet
     */
    public function getWechatApplet(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet
    {
        return $this->wechatApplet;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet $wechatApplet
     * @return self
     */
    public function setWechatApplet(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet $wechatApplet): self
    {
        $this->wechatApplet = $wechatApplet;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame
     */
    public function getWechatGame(): ?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame
    {
        return $this->wechatGame;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame $wechatGame
     * @return self
     */
    public function setWechatGame(?\Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame $wechatGame): self
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
            $obj->button = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerButton::fromArray($v);
        }
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerCoupon::fromArray($v);
        }
        if (($v = $data['form'] ?? null) !== null && is_array($v)) {
            $obj->form = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm::fromArray($v);
        }
        if (($v = $data['index'] ?? null) !== null) {
            $obj->index = (string) $v;
        }
        if (($v = $data['picture'] ?? null) !== null && is_array($v)) {
            $obj->picture = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPicture::fromArray($v);
        }
        if (($v = $data['picture_group'] ?? null) !== null && is_array($v)) {
            $obj->pictureGroup = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerPictureGroup::fromArray($v);
        }
        if (($v = $data['text'] ?? null) !== null && is_array($v)) {
            $obj->text = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerText::fromArray($v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerVideo::fromArray($v);
        }
        if (($v = $data['wechat_applet'] ?? null) !== null && is_array($v)) {
            $obj->wechatApplet = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatApplet::fromArray($v);
        }
        if (($v = $data['wechat_game'] ?? null) !== null && is_array($v)) {
            $obj->wechatGame = \Oceanengine\Models\ToolsSiteTemplateCreateV2ResponseDataBricksInnerWechatGame::fromArray($v);
        }
        return $obj;
    }
}
