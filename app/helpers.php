<?php

use App\Models\CompanyInformation;

if (!function_exists('get_logo_url')) {
    function get_logo_url()
    {
        // Gunakan static variable agar kueri tidak berulang dalam satu request
        static $faviconUrl = null;

        if ($faviconUrl === null) {
            $companyInfo = CompanyInformation::select('company_logo')->first();

            if ($companyInfo && $companyInfo->company_logo) {
                $faviconUrl = asset('storage/' . $companyInfo->company_logo);
            } else {
                $faviconUrl = asset('storage/company_logothumb/default-logo.png');
            }
        }

        return $faviconUrl;
    }
}

