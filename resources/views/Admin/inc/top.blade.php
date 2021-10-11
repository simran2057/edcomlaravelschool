
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
			<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('assets/css/pages/wizard/wizard-4.css') }} " rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
        @yield('pages')

	</head>
	<!--end::Head-->
