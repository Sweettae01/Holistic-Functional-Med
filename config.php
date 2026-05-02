<?php
// ─── Site Identity ────────────────────────────────────────────────────────────
define('SITE_NAME',    'Holistic Functional Medicine');
define('SITE_URL',     'https://holisticfunctionalmed.com'); // no trailing slash
define('SITE_TAGLINE', 'Functional medicine rooted in nature. Healing that starts from within.');
define('PRACTITIONER', 'Dr. Shanice Bennett');
define('SUPPORT_EMAIL','support@holisticfunctionalmedicine.com');

// ─── Database (fill in your cPanel values) ────────────────────────────────────
define('DB_HOST',    'localhost');
define('DB_NAME',    'holibkee_hfm');     // e.g. user123_hfm
define('DB_USER',    'holibkee_hfmuser');     // e.g. user123_hfm
define('DB_PASS',    'CHfm2026!P');
define('DB_CHARSET', 'utf8mb4');

// ─── Mail ─────────────────────────────────────────────────────────────────────
define('MAIL_FROM',      'noreply@holisticfunctionalmed.com');
define('MAIL_FROM_NAME', SITE_NAME);

// ─── Security & Sessions ──────────────────────────────────────────────────────
define('SESSION_TIMEOUT', 3600);  // seconds (1 hour)
define('TWO_FA_EXPIRY',   600);   // seconds (10 minutes)

// ─── Environment ──────────────────────────────────────────────────────────────
define('DEBUG_MODE', false); // Set true only during local dev

if (DEBUG_MODE) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
