<?php 
$AM_HEADLESS_ENABLED = getenv("HEADLESS_MODE", "true");
$AM_DEBUG_ENABLED = getenv("DEBUG_MODE", "false");
$AM_PAGE_DASHBOARD = getenv("DASHBOARD_LINK", "false");

return <<< JSON
{
    "AM_ALLOWED_FILE_TYPES": "dmg, iso, rar, tar, zip, aiff, m4a, mp3, ogg, wav, ai, dxf, eps, gif, ico, jpg, jpeg, png, psd, svg, tga, tiff, avi, flv, mov, mp4, mpeg, css, js, md, pdf",
    "AM_CACHE_ENABLED": true,
    "AM_CACHE_LIFETIME": 43200,
    "AM_CACHE_MONITOR_DELAY": 120,
    "AM_DEBUG_ENABLED": $AM_DEBUG_ENABLED,
    "AM_FEED_ENABLED": true,
    "AM_FEED_FIELDS": "+hero, +main",
    "AM_FILE_GUI_TRANSLATION": "",
    "AM_HEADLESS_ENABLED": $AM_HEADLESS_ENABLED,
	"AM_PAGE_DASHBOARD": $AM_PAGE_DASHBOARD
}
JSON;
