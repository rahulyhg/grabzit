<?php
namespace GrabzIt;

use Exception;

class GrabzItException extends \Exception {
    
    const SUCCESS = 0;
    const PARAMETER_NO_URL = 100;
    const PARAMETER_INVALID_URL = 101;
    const PARAMETER_NON_EXISTANT_URL = 102;
    const PARAMETER_MISSING_APPLICATION_KEY = 103;
    const PARAMETER_UNRECOGNISED_APPLICATION_KEY = 104;
    const PARAMETER_MISSING_SIGNATURE = 105;
    const PARAMETER_INVALID_SIGNATURE = 106;
    const PARAMETER_INVALID_FORMAT = 107;
    const PARAMETER_INVALID_COUNTRY_CODE = 108;
    const PARAMETER_DUPLICATE_IDENTIFIER = 109;
    const PARAMETER_MATCHING_RECORD_NOT_FOUND = 110;
    const PARAMETER_INVALID_CALLBACK_URL = 111;
    const PARAMETER_NON_EXISTANT_CALLBACK_URL = 112;
    const PARAMETER_IMAGE_WIDTH_TOO_LARGE = 113;
    const PARAMETER_IMAGE_HEIGHT_TOO_LARGE = 114;
    const PARAMETER_BROWSER_WIDTH_TOO_LARGE = 115;
    const PARAMETER_BROWSER_HEIGHT_TOO_LARGE = 116;
    const PARAMETER_DELAY_TOO_LARGE = 117;
    const PARAMETER_INVALID_BACKGROUND = 118;
    const PARAMETER_INVALID_INCLUDE_LINKS = 119;
    const PARAMETER_INVALID_INCLUDE_OUTLINE = 120;
    const PARAMETER_INVALID_PAGE_SIZE = 121;
    const PARAMETER_INVALID_PAGE_ORIENTATION = 122;
    const PARAMETER_VERTICAL_MARGIN_TOO_LARGE = 123;
    const PARAMETER_HORIZONTAL_MARGIN_TOO_LARGE = 124;
    const PARAMETER_INVALID_COVER_URL = 125;
    const PARAMETER_NON_EXISTANT_COVER_URL = 126;
    const PARAMETER_MISSING_COOKIE_NAME = 127;
    const PARAMETER_MISSING_COOKIE_DOMAIN = 128;
    const PARAMETER_INVALID_COOKIE_NAME = 129;
    const PARAMETER_INVALID_COOKIE_DOMAIN = 130;
    const PARAMETER_INVALID_COOKIE_DELETE = 131;
    const PARAMETER_INVALID_COOKIE_HTTP = 132;
    const PARAMETER_INVALID_COOKIE_EXPIRY = 133;
    const PARAMETER_INVALID_CACHE_VALUE = 134;
    const PARAMETER_INVALID_DOWNLOAD_VALUE = 135;
    const PARAMETER_INVALID_SUPPRESS_VALUE = 136;
    const PARAMETER_MISSING_WATERMARK_IDENTIFIER = 137;
    const PARAMETER_INVALID_WATERMARK_IDENTIFIER = 138;
    const PARAMETER_INVALID_WATERMARK_XPOS = 139;
    const PARAMETER_INVALID_WATERMARK_YPOS = 140;
    const PARAMETER_MISSING_WATERMARK_FORMAT = 141;
    const PARAMETER_WATERMARK_TOO_LARGE = 142;
    const PARAMETER_MISSING_PARAMETERS = 143;
    const PARAMETER_QUALITY_TOO_LARGE = 144;
    const PARAMETER_QUALITY_TOO_SMALL = 145;
    const PARAMETER_REPEAT_TOO_SMALL = 149;
    const PARAMETER_INVALID_REVERSE = 150;
    const PARAMETER_FPS_TOO_LARGE = 151;
    const PARAMETER_FPS_TOO_SMALL = 152;
    const PARAMETER_SPEED_TOO_FAST = 153;
    const PARAMETER_SPEED_TOO_SLOW = 154;
    const PARAMETER_INVALID_ANIMATION_COMBINATION = 155;
    const PARAMETER_START_TOO_SMALL = 156;
    const PARAMETER_DURATION_TOO_SMALL = 157;
    const PARAMETER_NO_HTML = 163;
    const PARAMETER_INVALID_TARGET_VALUE = 165;
    const PARAMETER_INVALID_HIDE_VALUE = 166;
    const PARAMETER_INVALID_INCLUDE_IMAGES = 167;
    const PARAMETER_INVALID_EXPORT_URL = 168;
    const PARAMETER_INVALID_WAIT_FOR_VALUE = 169;
    const PARAMETER_INVALID_TRANSPARENT_VALUE = 170;
    const PARAMETER_INVALID_ENCRYPTION_KEY = 171;
    const PARAMETER_INVALID_NO_ADS = 172;
    const PARAMETER_INVALID_PROXY = 173;
	const PARAMETER_INVALID_NO_NOTIFY = 174;
    const NETWORK_SERVER_OFFLINE = 200;
    const NETWORK_GENERAL_ERROR = 201;
    const NETWORK_DDOS_ATTACK = 202;
    const RENDERING_ERROR = 300;
    const RENDERING_MISSING_SCREENSHOT = 301;
    const GENERIC_ERROR = 400;
    const UPGRADE_REQUIRED = 500;
    const FILE_SAVE_ERROR = 600;
    const FILE_NON_EXISTANT_PATH = 601;   
    
    public function __construct($message, $code)
    {
        $this->code = $code;
	    parent::__construct($message);
    }
}
?>