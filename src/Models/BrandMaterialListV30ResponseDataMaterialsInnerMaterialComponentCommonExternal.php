<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternal implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo $closeLoopInfo = null;

    /**
     * 落地页标题
     * @var string
     */
    protected ?string $externalTitle = null;

    /**
     * 落地页链接
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 是否下载意图 0：否  1：是
     * @var int
     */
    protected ?int $externalUrlIsDownload = null;

    /**
     * 是否关闭评论 0：否  1：是
     * @var int
     */
    protected ?int $isCommentDisable = null;

    /**
     * 是否以webview打开 0：否  1：是
     * @var int
     */
    protected ?int $isWebView = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo = null;

    /**
     * 小程序链接类型 0：默认(抖音) 1：微信
     * @var int
     */
    protected ?int $microAppOpenUrlType = null;

    /**
     * 直达链接
     * @var string
     */
    protected ?string $openUrl = null;

    /**
     * 直达链接文案
     * @var string
     */
    protected ?string $openUrlText = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo
     */
    public function getCloseLoopInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo
    {
        return $this->closeLoopInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo $closeLoopInfo
     * @return self
     */
    public function setCloseLoopInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo $closeLoopInfo): self
    {
        $this->closeLoopInfo = $closeLoopInfo;
        return $this;
    }

    /**
     * 落地页标题
     * @return string
     */
    public function getExternalTitle(): ?string
    {
        return $this->externalTitle;
    }

    /**
     * 落地页标题
     * @param string $externalTitle
     * @return self
     */
    public function setExternalTitle(?string $externalTitle): self
    {
        $this->externalTitle = $externalTitle;
        return $this;
    }

    /**
     * 落地页链接
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页链接
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 是否下载意图 0：否  1：是
     * @return int
     */
    public function getExternalUrlIsDownload(): ?int
    {
        return $this->externalUrlIsDownload;
    }

    /**
     * 是否下载意图 0：否  1：是
     * @param int $externalUrlIsDownload
     * @return self
     */
    public function setExternalUrlIsDownload(?int $externalUrlIsDownload): self
    {
        $this->externalUrlIsDownload = $externalUrlIsDownload;
        return $this;
    }

    /**
     * 是否关闭评论 0：否  1：是
     * @return int
     */
    public function getIsCommentDisable(): ?int
    {
        return $this->isCommentDisable;
    }

    /**
     * 是否关闭评论 0：否  1：是
     * @param int $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?int $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * 是否以webview打开 0：否  1：是
     * @return int
     */
    public function getIsWebView(): ?int
    {
        return $this->isWebView;
    }

    /**
     * 是否以webview打开 0：否  1：是
     * @param int $isWebView
     * @return self
     */
    public function setIsWebView(?int $isWebView): self
    {
        $this->isWebView = $isWebView;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo
     */
    public function getMicroAppInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo
    {
        return $this->microAppInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo
     * @return self
     */
    public function setMicroAppInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo $microAppInfo): self
    {
        $this->microAppInfo = $microAppInfo;
        return $this;
    }

    /**
     * 小程序链接类型 0：默认(抖音) 1：微信
     * @return int
     */
    public function getMicroAppOpenUrlType(): ?int
    {
        return $this->microAppOpenUrlType;
    }

    /**
     * 小程序链接类型 0：默认(抖音) 1：微信
     * @param int $microAppOpenUrlType
     * @return self
     */
    public function setMicroAppOpenUrlType(?int $microAppOpenUrlType): self
    {
        $this->microAppOpenUrlType = $microAppOpenUrlType;
        return $this;
    }

    /**
     * 直达链接
     * @return string
     */
    public function getOpenUrl(): ?string
    {
        return $this->openUrl;
    }

    /**
     * 直达链接
     * @param string $openUrl
     * @return self
     */
    public function setOpenUrl(?string $openUrl): self
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * 直达链接文案
     * @return string
     */
    public function getOpenUrlText(): ?string
    {
        return $this->openUrlText;
    }

    /**
     * 直达链接文案
     * @param string $openUrlText
     * @return self
     */
    public function setOpenUrlText(?string $openUrlText): self
    {
        $this->openUrlText = $openUrlText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo
     */
    public function getWechatMicroAppInfo(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo
    {
        return $this->wechatMicroAppInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo
     * @return self
     */
    public function setWechatMicroAppInfo(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo $wechatMicroAppInfo): self
    {
        $this->wechatMicroAppInfo = $wechatMicroAppInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->closeLoopInfo !== null) {
            $result['close_loop_info'] = $this->closeLoopInfo;
        }
        if ($this->externalTitle !== null) {
            $result['external_title'] = $this->externalTitle;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->externalUrlIsDownload !== null) {
            $result['external_url_is_download'] = $this->externalUrlIsDownload;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->isWebView !== null) {
            $result['is_web_view'] = $this->isWebView;
        }
        if ($this->microAppInfo !== null) {
            $result['micro_app_info'] = $this->microAppInfo;
        }
        if ($this->microAppOpenUrlType !== null) {
            $result['micro_app_open_url_type'] = $this->microAppOpenUrlType;
        }
        if ($this->openUrl !== null) {
            $result['open_url'] = $this->openUrl;
        }
        if ($this->openUrlText !== null) {
            $result['open_url_text'] = $this->openUrlText;
        }
        if ($this->wechatMicroAppInfo !== null) {
            $result['wechat_micro_app_info'] = $this->wechatMicroAppInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['close_loop_info'] ?? null) !== null && is_array($v)) {
            $obj->closeLoopInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalCloseLoopInfo::fromArray($v);
        }
        if (($v = $data['external_title'] ?? null) !== null) {
            $obj->externalTitle = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['external_url_is_download'] ?? null) !== null) {
            $obj->externalUrlIsDownload = (int) $v;
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (int) $v;
        }
        if (($v = $data['is_web_view'] ?? null) !== null) {
            $obj->isWebView = (int) $v;
        }
        if (($v = $data['micro_app_info'] ?? null) !== null && is_array($v)) {
            $obj->microAppInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalMicroAppInfo::fromArray($v);
        }
        if (($v = $data['micro_app_open_url_type'] ?? null) !== null) {
            $obj->microAppOpenUrlType = (int) $v;
        }
        if (($v = $data['open_url'] ?? null) !== null) {
            $obj->openUrl = (string) $v;
        }
        if (($v = $data['open_url_text'] ?? null) !== null) {
            $obj->openUrlText = (string) $v;
        }
        if (($v = $data['wechat_micro_app_info'] ?? null) !== null && is_array($v)) {
            $obj->wechatMicroAppInfo = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentCommonExternalWechatMicroAppInfo::fromArray($v);
        }
        return $obj;
    }
}
