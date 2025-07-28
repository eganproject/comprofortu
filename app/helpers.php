<?php

use App\Models\CompanyInformation;

if (!function_exists('get_logo_url')) {
    function get_logo_url()
    {
        // Gunakan static variable agar kueri tidak berulang dalam satu request
        static $logoUrl = null;

        if ($logoUrl === null) {
            $companyInfo = CompanyInformation::select('company_logo')->first();

            if ($companyInfo && $companyInfo->company_logo) {
                $logoUrl = asset('storage/' . $companyInfo->company_logo);
            } else {
                $logoUrl = asset('storage/company_logothumb/default-logo.png');
            }
        }

        return $logoUrl;
    }

    function get_logo_header_url()
    {
        // Gunakan static variable agar kueri tidak berulang dalam satu request
        static $headerIconUrl = null;

        if ($headerIconUrl === null) {
            $companyInfo = CompanyInformation::select('company_header')->first();

            if ($companyInfo && $companyInfo->company_header) {
                $headerIconUrl = asset('storage/' . $companyInfo->company_header);
            } else {
                $headerIconUrl = asset('storage/company_headerthumb/default-logo.png');
            }
        }

        return $headerIconUrl;
    }

    function getYoutubeUrl()
    {
        // Gunakan static variable agar kueri tidak berulang dalam satu request
        static $faviconUrl = null;

        if ($faviconUrl === null) {
            $companyInfo = CompanyInformation::select('youtube_link_index')->first();

        }

        return $companyInfo->youtube_link_index;
    }
}

