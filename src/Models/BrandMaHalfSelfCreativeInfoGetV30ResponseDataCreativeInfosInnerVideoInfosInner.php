<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInner implements \JsonSerializable
{
    /**
     * add_time字段
     * @var string
     */
    protected ?string $addTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor
     */
    protected ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor $autoColor = null;

    /**
     * bit_rate字段
     * @var int
     */
    protected ?int $bitRate = null;

    /**
     * business字段
     * @var int
     */
    protected ?int $business = null;

    /**
     * code字段
     * @var int
     */
    protected ?int $code = null;

    /**
     * codec字段
     * @var string
     */
    protected ?string $codec = null;

    /**
     * cover_uri字段
     * @var string
     */
    protected ?string $coverUri = null;

    /**
     * cover_url字段
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 视频时长,单位秒
     * @var int
     */
    protected ?int $duration = null;

    /**
     * error_desc字段
     * @var string
     */
    protected ?string $errorDesc = null;

    /**
     * file_md5字段
     * @var string
     */
    protected ?string $fileMd5 = null;

    /**
     * file_name字段
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * file_sign字段
     * @var string
     */
    protected ?string $fileSign = null;

    /**
     * 文件大小,单位字节
     * @var int
     */
    protected ?int $fileSize = null;

    /**
     * 视频格式
     * @var string
     */
    protected ?string $format = null;

    /**
     * generate_mode字段
     * @var int
     */
    protected ?int $generateMode = null;

    /**
     * 高,单位px
     * @var int
     */
    protected ?int $height = null;

    /**
     * 类型
     * @var int
     */
    protected ?int $imageMode = null;

    /**
     * img字段
     * @var string
     */
    protected ?string $img = null;

    /**
     * img_uri字段
     * @var string
     */
    protected ?string $imgUri = null;

    /**
     * initial_size字段
     * @var int
     */
    protected ?int $initialSize = null;

    /**
     * message字段
     * @var string
     */
    protected ?string $message = null;

    /**
     * mode字段
     * @var int
     */
    protected ?int $mode = null;

    /**
     * origin_play_url字段
     * @var string
     */
    protected ?string $originPlayUrl = null;

    /**
     * original_file_uri字段
     * @var string
     */
    protected ?string $originalFileUri = null;

    /**
     * 是否加密视频 [废弃]
     * @var int
     */
    protected ?int $secretType = null;

    /**
     * status字段
     * @var int
     */
    protected ?int $status = null;

    /**
     * status_code字段
     * @var int
     */
    protected ?int $statusCode = null;

    /**
     * thumb_height字段
     * @var int
     */
    protected ?int $thumbHeight = null;

    /**
     * 封面图
     * @var string
     */
    protected ?string $thumbUri = null;

    /**
     * thumb_width字段
     * @var int
     */
    protected ?int $thumbWidth = null;

    /**
     * total字段
     * @var int
     */
    protected ?int $total = null;

    /**
     * upload_id字段
     * @var string
     */
    protected ?string $uploadId = null;

    /**
     * user_reference字段
     * @var string
     */
    protected ?string $userReference = null;

    /**
     * vid字段
     * @var string
     */
    protected ?string $vid = null;

    /**
     * video_duration字段
     * @var int
     */
    protected ?int $videoDuration = null;

    /**
     * 视频Group化Id
     * @var string
     */
    protected ?string $videoGroupId = null;

    /**
     * video_id字段
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * video_md5字段
     * @var string
     */
    protected ?string $videoMd5 = null;

    /**
     * video_name字段
     * @var string
     */
    protected ?string $videoName = null;

    /**
     * video_poster字段
     * @var string
     */
    protected ?string $videoPoster = null;

    /**
     * 视频是否加密(由于最终落库字段是这个名字，为省掉不必要的convert，不使用secretType)
     * @var int
     */
    protected ?int $videoSecretFlag = null;

    /**
     * 这个字段内容是一个动态 json 结构的字符串 {\"high\":{\"duration\":51.247,\"h\":854,\"w\":480,\"file_size\":8995101}}
     * @var string
     */
    protected ?string $videoSize = null;

    /**
     * video_transpose字段
     * @var int
     */
    protected ?int $videoTranspose = null;

    /**
     * video_unique字段
     * @var string
     */
    protected ?string $videoUnique = null;

    /**
     * video_url字段
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 视频封面图会过期，这个字段存储从视频架构拉取数据的PosterUrl，为了不影响历史逻辑，新开字段
     * @var string
     */
    protected ?string $webUrlShow = null;

    /**
     * 宽,单位px
     * @var int
     */
    protected ?int $width = null;

    /**
     * add_time字段
     * @return string
     */
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

    /**
     * add_time字段
     * @param string $addTime
     * @return self
     */
    public function setAddTime(?string $addTime): self
    {
        $this->addTime = $addTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor
     */
    public function getAutoColor(): ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor
    {
        return $this->autoColor;
    }

    /**
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor $autoColor
     * @return self
     */
    public function setAutoColor(?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor $autoColor): self
    {
        $this->autoColor = $autoColor;
        return $this;
    }

    /**
     * bit_rate字段
     * @return int
     */
    public function getBitRate(): ?int
    {
        return $this->bitRate;
    }

    /**
     * bit_rate字段
     * @param int $bitRate
     * @return self
     */
    public function setBitRate(?int $bitRate): self
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * business字段
     * @return int
     */
    public function getBusiness(): ?int
    {
        return $this->business;
    }

    /**
     * business字段
     * @param int $business
     * @return self
     */
    public function setBusiness(?int $business): self
    {
        $this->business = $business;
        return $this;
    }

    /**
     * code字段
     * @return int
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * code字段
     * @param int $code
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * codec字段
     * @return string
     */
    public function getCodec(): ?string
    {
        return $this->codec;
    }

    /**
     * codec字段
     * @param string $codec
     * @return self
     */
    public function setCodec(?string $codec): self
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * cover_uri字段
     * @return string
     */
    public function getCoverUri(): ?string
    {
        return $this->coverUri;
    }

    /**
     * cover_uri字段
     * @param string $coverUri
     * @return self
     */
    public function setCoverUri(?string $coverUri): self
    {
        $this->coverUri = $coverUri;
        return $this;
    }

    /**
     * cover_url字段
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * cover_url字段
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 视频时长,单位秒
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 视频时长,单位秒
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * error_desc字段
     * @return string
     */
    public function getErrorDesc(): ?string
    {
        return $this->errorDesc;
    }

    /**
     * error_desc字段
     * @param string $errorDesc
     * @return self
     */
    public function setErrorDesc(?string $errorDesc): self
    {
        $this->errorDesc = $errorDesc;
        return $this;
    }

    /**
     * file_md5字段
     * @return string
     */
    public function getFileMd5(): ?string
    {
        return $this->fileMd5;
    }

    /**
     * file_md5字段
     * @param string $fileMd5
     * @return self
     */
    public function setFileMd5(?string $fileMd5): self
    {
        $this->fileMd5 = $fileMd5;
        return $this;
    }

    /**
     * file_name字段
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * file_name字段
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * file_sign字段
     * @return string
     */
    public function getFileSign(): ?string
    {
        return $this->fileSign;
    }

    /**
     * file_sign字段
     * @param string $fileSign
     * @return self
     */
    public function setFileSign(?string $fileSign): self
    {
        $this->fileSign = $fileSign;
        return $this;
    }

    /**
     * 文件大小,单位字节
     * @return int
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * 文件大小,单位字节
     * @param int $fileSize
     * @return self
     */
    public function setFileSize(?int $fileSize): self
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * 视频格式
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * 视频格式
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * generate_mode字段
     * @return int
     */
    public function getGenerateMode(): ?int
    {
        return $this->generateMode;
    }

    /**
     * generate_mode字段
     * @param int $generateMode
     * @return self
     */
    public function setGenerateMode(?int $generateMode): self
    {
        $this->generateMode = $generateMode;
        return $this;
    }

    /**
     * 高,单位px
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 高,单位px
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 类型
     * @return int
     */
    public function getImageMode(): ?int
    {
        return $this->imageMode;
    }

    /**
     * 类型
     * @param int $imageMode
     * @return self
     */
    public function setImageMode(?int $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * img字段
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * img字段
     * @param string $img
     * @return self
     */
    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    /**
     * img_uri字段
     * @return string
     */
    public function getImgUri(): ?string
    {
        return $this->imgUri;
    }

    /**
     * img_uri字段
     * @param string $imgUri
     * @return self
     */
    public function setImgUri(?string $imgUri): self
    {
        $this->imgUri = $imgUri;
        return $this;
    }

    /**
     * initial_size字段
     * @return int
     */
    public function getInitialSize(): ?int
    {
        return $this->initialSize;
    }

    /**
     * initial_size字段
     * @param int $initialSize
     * @return self
     */
    public function setInitialSize(?int $initialSize): self
    {
        $this->initialSize = $initialSize;
        return $this;
    }

    /**
     * message字段
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * message字段
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * mode字段
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * mode字段
     * @param int $mode
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * origin_play_url字段
     * @return string
     */
    public function getOriginPlayUrl(): ?string
    {
        return $this->originPlayUrl;
    }

    /**
     * origin_play_url字段
     * @param string $originPlayUrl
     * @return self
     */
    public function setOriginPlayUrl(?string $originPlayUrl): self
    {
        $this->originPlayUrl = $originPlayUrl;
        return $this;
    }

    /**
     * original_file_uri字段
     * @return string
     */
    public function getOriginalFileUri(): ?string
    {
        return $this->originalFileUri;
    }

    /**
     * original_file_uri字段
     * @param string $originalFileUri
     * @return self
     */
    public function setOriginalFileUri(?string $originalFileUri): self
    {
        $this->originalFileUri = $originalFileUri;
        return $this;
    }

    /**
     * 是否加密视频 [废弃]
     * @return int
     */
    public function getSecretType(): ?int
    {
        return $this->secretType;
    }

    /**
     * 是否加密视频 [废弃]
     * @param int $secretType
     * @return self
     */
    public function setSecretType(?int $secretType): self
    {
        $this->secretType = $secretType;
        return $this;
    }

    /**
     * status字段
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * status字段
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * status_code字段
     * @return int
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * status_code字段
     * @param int $statusCode
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * thumb_height字段
     * @return int
     */
    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }

    /**
     * thumb_height字段
     * @param int $thumbHeight
     * @return self
     */
    public function setThumbHeight(?int $thumbHeight): self
    {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

    /**
     * 封面图
     * @return string
     */
    public function getThumbUri(): ?string
    {
        return $this->thumbUri;
    }

    /**
     * 封面图
     * @param string $thumbUri
     * @return self
     */
    public function setThumbUri(?string $thumbUri): self
    {
        $this->thumbUri = $thumbUri;
        return $this;
    }

    /**
     * thumb_width字段
     * @return int
     */
    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    /**
     * thumb_width字段
     * @param int $thumbWidth
     * @return self
     */
    public function setThumbWidth(?int $thumbWidth): self
    {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * total字段
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * total字段
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * upload_id字段
     * @return string
     */
    public function getUploadId(): ?string
    {
        return $this->uploadId;
    }

    /**
     * upload_id字段
     * @param string $uploadId
     * @return self
     */
    public function setUploadId(?string $uploadId): self
    {
        $this->uploadId = $uploadId;
        return $this;
    }

    /**
     * user_reference字段
     * @return string
     */
    public function getUserReference(): ?string
    {
        return $this->userReference;
    }

    /**
     * user_reference字段
     * @param string $userReference
     * @return self
     */
    public function setUserReference(?string $userReference): self
    {
        $this->userReference = $userReference;
        return $this;
    }

    /**
     * vid字段
     * @return string
     */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
     * vid字段
     * @param string $vid
     * @return self
     */
    public function setVid(?string $vid): self
    {
        $this->vid = $vid;
        return $this;
    }

    /**
     * video_duration字段
     * @return int
     */
    public function getVideoDuration(): ?int
    {
        return $this->videoDuration;
    }

    /**
     * video_duration字段
     * @param int $videoDuration
     * @return self
     */
    public function setVideoDuration(?int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
        return $this;
    }

    /**
     * 视频Group化Id
     * @return string
     */
    public function getVideoGroupId(): ?string
    {
        return $this->videoGroupId;
    }

    /**
     * 视频Group化Id
     * @param string $videoGroupId
     * @return self
     */
    public function setVideoGroupId(?string $videoGroupId): self
    {
        $this->videoGroupId = $videoGroupId;
        return $this;
    }

    /**
     * video_id字段
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * video_id字段
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * video_md5字段
     * @return string
     */
    public function getVideoMd5(): ?string
    {
        return $this->videoMd5;
    }

    /**
     * video_md5字段
     * @param string $videoMd5
     * @return self
     */
    public function setVideoMd5(?string $videoMd5): self
    {
        $this->videoMd5 = $videoMd5;
        return $this;
    }

    /**
     * video_name字段
     * @return string
     */
    public function getVideoName(): ?string
    {
        return $this->videoName;
    }

    /**
     * video_name字段
     * @param string $videoName
     * @return self
     */
    public function setVideoName(?string $videoName): self
    {
        $this->videoName = $videoName;
        return $this;
    }

    /**
     * video_poster字段
     * @return string
     */
    public function getVideoPoster(): ?string
    {
        return $this->videoPoster;
    }

    /**
     * video_poster字段
     * @param string $videoPoster
     * @return self
     */
    public function setVideoPoster(?string $videoPoster): self
    {
        $this->videoPoster = $videoPoster;
        return $this;
    }

    /**
     * 视频是否加密(由于最终落库字段是这个名字，为省掉不必要的convert，不使用secretType)
     * @return int
     */
    public function getVideoSecretFlag(): ?int
    {
        return $this->videoSecretFlag;
    }

    /**
     * 视频是否加密(由于最终落库字段是这个名字，为省掉不必要的convert，不使用secretType)
     * @param int $videoSecretFlag
     * @return self
     */
    public function setVideoSecretFlag(?int $videoSecretFlag): self
    {
        $this->videoSecretFlag = $videoSecretFlag;
        return $this;
    }

    /**
     * 这个字段内容是一个动态 json 结构的字符串 {\"high\":{\"duration\":51.247,\"h\":854,\"w\":480,\"file_size\":8995101}}
     * @return string
     */
    public function getVideoSize(): ?string
    {
        return $this->videoSize;
    }

    /**
     * 这个字段内容是一个动态 json 结构的字符串 {\"high\":{\"duration\":51.247,\"h\":854,\"w\":480,\"file_size\":8995101}}
     * @param string $videoSize
     * @return self
     */
    public function setVideoSize(?string $videoSize): self
    {
        $this->videoSize = $videoSize;
        return $this;
    }

    /**
     * video_transpose字段
     * @return int
     */
    public function getVideoTranspose(): ?int
    {
        return $this->videoTranspose;
    }

    /**
     * video_transpose字段
     * @param int $videoTranspose
     * @return self
     */
    public function setVideoTranspose(?int $videoTranspose): self
    {
        $this->videoTranspose = $videoTranspose;
        return $this;
    }

    /**
     * video_unique字段
     * @return string
     */
    public function getVideoUnique(): ?string
    {
        return $this->videoUnique;
    }

    /**
     * video_unique字段
     * @param string $videoUnique
     * @return self
     */
    public function setVideoUnique(?string $videoUnique): self
    {
        $this->videoUnique = $videoUnique;
        return $this;
    }

    /**
     * video_url字段
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * video_url字段
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * 视频封面图会过期，这个字段存储从视频架构拉取数据的PosterUrl，为了不影响历史逻辑，新开字段
     * @return string
     */
    public function getWebUrlShow(): ?string
    {
        return $this->webUrlShow;
    }

    /**
     * 视频封面图会过期，这个字段存储从视频架构拉取数据的PosterUrl，为了不影响历史逻辑，新开字段
     * @param string $webUrlShow
     * @return self
     */
    public function setWebUrlShow(?string $webUrlShow): self
    {
        $this->webUrlShow = $webUrlShow;
        return $this;
    }

    /**
     * 宽,单位px
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 宽,单位px
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
        if ($this->addTime !== null) {
            $result['add_time'] = $this->addTime;
        }
        if ($this->autoColor !== null) {
            $result['auto_color'] = $this->autoColor;
        }
        if ($this->bitRate !== null) {
            $result['bit_rate'] = $this->bitRate;
        }
        if ($this->business !== null) {
            $result['business'] = $this->business;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->codec !== null) {
            $result['codec'] = $this->codec;
        }
        if ($this->coverUri !== null) {
            $result['cover_uri'] = $this->coverUri;
        }
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->errorDesc !== null) {
            $result['error_desc'] = $this->errorDesc;
        }
        if ($this->fileMd5 !== null) {
            $result['file_md5'] = $this->fileMd5;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->fileSign !== null) {
            $result['file_sign'] = $this->fileSign;
        }
        if ($this->fileSize !== null) {
            $result['file_size'] = $this->fileSize;
        }
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->generateMode !== null) {
            $result['generate_mode'] = $this->generateMode;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->imgUri !== null) {
            $result['img_uri'] = $this->imgUri;
        }
        if ($this->initialSize !== null) {
            $result['initial_size'] = $this->initialSize;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->originPlayUrl !== null) {
            $result['origin_play_url'] = $this->originPlayUrl;
        }
        if ($this->originalFileUri !== null) {
            $result['original_file_uri'] = $this->originalFileUri;
        }
        if ($this->secretType !== null) {
            $result['secret_type'] = $this->secretType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        if ($this->thumbHeight !== null) {
            $result['thumb_height'] = $this->thumbHeight;
        }
        if ($this->thumbUri !== null) {
            $result['thumb_uri'] = $this->thumbUri;
        }
        if ($this->thumbWidth !== null) {
            $result['thumb_width'] = $this->thumbWidth;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->uploadId !== null) {
            $result['upload_id'] = $this->uploadId;
        }
        if ($this->userReference !== null) {
            $result['user_reference'] = $this->userReference;
        }
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
        }
        if ($this->videoGroupId !== null) {
            $result['video_group_id'] = $this->videoGroupId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoMd5 !== null) {
            $result['video_md5'] = $this->videoMd5;
        }
        if ($this->videoName !== null) {
            $result['video_name'] = $this->videoName;
        }
        if ($this->videoPoster !== null) {
            $result['video_poster'] = $this->videoPoster;
        }
        if ($this->videoSecretFlag !== null) {
            $result['video_secret_flag'] = $this->videoSecretFlag;
        }
        if ($this->videoSize !== null) {
            $result['video_size'] = $this->videoSize;
        }
        if ($this->videoTranspose !== null) {
            $result['video_transpose'] = $this->videoTranspose;
        }
        if ($this->videoUnique !== null) {
            $result['video_unique'] = $this->videoUnique;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        if ($this->webUrlShow !== null) {
            $result['web_url_show'] = $this->webUrlShow;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['add_time'] ?? null) !== null) {
            $obj->addTime = (string) $v;
        }
        if (($v = $data['auto_color'] ?? null) !== null && is_array($v)) {
            $obj->autoColor = \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerVideoInfosInnerAutoColor::fromArray($v);
        }
        if (($v = $data['bit_rate'] ?? null) !== null) {
            $obj->bitRate = (int) $v;
        }
        if (($v = $data['business'] ?? null) !== null) {
            $obj->business = (int) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (int) $v;
        }
        if (($v = $data['codec'] ?? null) !== null) {
            $obj->codec = (string) $v;
        }
        if (($v = $data['cover_uri'] ?? null) !== null) {
            $obj->coverUri = (string) $v;
        }
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['error_desc'] ?? null) !== null) {
            $obj->errorDesc = (string) $v;
        }
        if (($v = $data['file_md5'] ?? null) !== null) {
            $obj->fileMd5 = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['file_sign'] ?? null) !== null) {
            $obj->fileSign = (string) $v;
        }
        if (($v = $data['file_size'] ?? null) !== null) {
            $obj->fileSize = (int) $v;
        }
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['generate_mode'] ?? null) !== null) {
            $obj->generateMode = (int) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['img_uri'] ?? null) !== null) {
            $obj->imgUri = (string) $v;
        }
        if (($v = $data['initial_size'] ?? null) !== null) {
            $obj->initialSize = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['mode'] ?? null) !== null) {
            $obj->mode = (int) $v;
        }
        if (($v = $data['origin_play_url'] ?? null) !== null) {
            $obj->originPlayUrl = (string) $v;
        }
        if (($v = $data['original_file_uri'] ?? null) !== null) {
            $obj->originalFileUri = (string) $v;
        }
        if (($v = $data['secret_type'] ?? null) !== null) {
            $obj->secretType = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (int) $v;
        }
        if (($v = $data['thumb_height'] ?? null) !== null) {
            $obj->thumbHeight = (int) $v;
        }
        if (($v = $data['thumb_uri'] ?? null) !== null) {
            $obj->thumbUri = (string) $v;
        }
        if (($v = $data['thumb_width'] ?? null) !== null) {
            $obj->thumbWidth = (int) $v;
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        if (($v = $data['upload_id'] ?? null) !== null) {
            $obj->uploadId = (string) $v;
        }
        if (($v = $data['user_reference'] ?? null) !== null) {
            $obj->userReference = (string) $v;
        }
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (string) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (int) $v;
        }
        if (($v = $data['video_group_id'] ?? null) !== null) {
            $obj->videoGroupId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_md5'] ?? null) !== null) {
            $obj->videoMd5 = (string) $v;
        }
        if (($v = $data['video_name'] ?? null) !== null) {
            $obj->videoName = (string) $v;
        }
        if (($v = $data['video_poster'] ?? null) !== null) {
            $obj->videoPoster = (string) $v;
        }
        if (($v = $data['video_secret_flag'] ?? null) !== null) {
            $obj->videoSecretFlag = (int) $v;
        }
        if (($v = $data['video_size'] ?? null) !== null) {
            $obj->videoSize = (string) $v;
        }
        if (($v = $data['video_transpose'] ?? null) !== null) {
            $obj->videoTranspose = (int) $v;
        }
        if (($v = $data['video_unique'] ?? null) !== null) {
            $obj->videoUnique = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        if (($v = $data['web_url_show'] ?? null) !== null) {
            $obj->webUrlShow = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
