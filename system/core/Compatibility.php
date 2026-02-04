<?php
// Fix PHP 8.2+ dynamic property deprecation for CodeIgniter 3

if (PHP_VERSION_ID >= 80200) {
    #[AllowDynamicProperties]
    class CI_Controller {}
    #[AllowDynamicProperties]
    class CI_Model {}
    #[AllowDynamicProperties]
    class CI_Loader {}
    #[AllowDynamicProperties]
    class CI_URI {}
    #[AllowDynamicProperties]
    class CI_Router {}
}
