<?php

declare(strict_types=1);

namespace Oceanengine;

/**
 * Describes a file to be uploaded as part of a multipart/form-data request.
 */
class FormFileInfo
{
    /**
     * @param string $fieldName Form field name
     * @param string $filePath Absolute path of the file on disk
     * @param string $contentType MIME type of the file
     */
    public function __construct(
        public string $fieldName,
        public string $filePath,
        public string $contentType
    ) {
    }
}
