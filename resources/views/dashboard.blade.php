<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Dashboard - Mytems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Themesdesign" name="author">

    <!-- App favicon -->
    <link rel="icon" href="{{ asset('assets/logo/favicon.ico') }}">

    <script>
        (function() {
            const html = document.documentElement;
            const storageKey = "__TAILWICK_CONFIG__";
            const savedConfig = sessionStorage.getItem(storageKey);

            // Default config
            const defaultConfig = {
                dir: "ltr",
                theme: "light",
                sidenav: {
                    color: "light",
                    size: "default",
                },
            };

            // Build config from HTML attributes
            function getSystemTheme() {
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light";
            }

            // Build config from HTML attributes
            const htmlConfig = {
                dir: html.getAttribute("dir") || defaultConfig.dir,

                theme: html.getAttribute("data-theme") === 'system' ?
                    getSystemTheme() :
                    html.getAttribute("data-theme") || (defaultConfig.theme === 'system' ? getSystemTheme() :
                        defaultConfig.theme),
                sidenav: {
                    color: html.getAttribute("data-sidenav-color") || defaultConfig.sidenav.color,
                    size: html.getAttribute("data-sidenav-size") || defaultConfig.sidenav.size,
                },
            };

            // Save merged config as defaults globally
            window.defaultConfig = structuredClone(htmlConfig);

            // Load from session if exists
            let config = savedConfig ? JSON.parse(savedConfig) : htmlConfig;
            window.config = config;

            // Apply layout attributes immediately
            html.setAttribute("dir", config.dir);
            html.setAttribute("data-theme", config.theme);
            html.setAttribute("data-sidenav-color", config.sidenav.color);

            if (config.sidenav.size) {
                let size = config.sidenav.size;

                if (window.innerWidth <= 1140) {
                    size = "offcanvas";
                }

                html.setAttribute("data-sidenav-size", size);
            }
        })();
    </script>

    <style>
        .sidebar-collapsed .logo-sm {
            display: flex !important;
        }

        .sidebar-collapsed .logo-lg {
            display: none !important;
        }
    </style>

    <script type="module" crossorigin src="{{ asset('assets/index-CmxHtAW3.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('assets/app-APNOAydp.js') }}">
    <link rel="modulepreload" crossorigin href="{{ asset('assets/apexcharts.esm-DPbJ6jlt.js') }}">
    <link rel="modulepreload" crossorigin href="{{ asset('assets/flatpickr-DxeCcIwz.js') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('assets/app-HMWHReTH.css') }}">
    <link href="{{ asset('assets/style_loader.css') }}" rel="stylesheet">



    <script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{ page: 'comingSoon', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark bg-gray-900': darkMode === true }">

    <div
    x-data="{ loading: true }"
    id="global-loader"
    @loader-hide.window="loading = false"
>
    <div
        id="ID-load"
        class="ID-load fixed inset-0 bg-white dark:bg-black z-[999999] flex justify-center items-center"
        x-show="loading"
        x-transition.opacity.duration.400ms
    >

            <div class="text-center">
                <div class="mb-2" style="font-size:15px;color:#6d7b8a;">Cargando Mytems...</div>

                <div class="id-load-content">

                    <!-- SHOP -->
                    <div class="id-load-icon id-shop" title="shop">
                        <svg viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M490.3 13.1l57.3 90.7c29.7 46.9 3.4 112-52.1 119.4c-4 .5-7.9 .8-12.1 .8c-26.1 0-49.2-11.4-65.2-29c-15.9 17.6-39 29-65.2 29c-26.1 0-49.3-11.4-65.2-29c-15.9 17.6-39 29-65.2 29c-26.1 0-49.3-11.4-65.2-29c-15.9 17.6-39.1 29-65.2 29c-4.1 0-8.2-.3-12.1-.8c-55.3-7.4-81.5-72.6-51.9-119.4L85.7 13.1C90.8 5 99.9 0 109.6 0H466.4c9.7 0 18.8 5 23.9 13.1z" />
                            <path fill="currentColor"
                                d="M64 219.1V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V219.1c-5.1 2-10.6 3.4-16.5 4.1c-4 .5-7.9 .8-12.1 .8c-12.7 0-24.6-2.7-35.4-7.5V384H128V216.5c-10.8 4.8-22.9 7.5-35.6 7.5c-4.1 0-8.2-.3-12.1-.8c-5.7-.8-11.2-2.2-16.2-4.1z" />
                        </svg>
                    </div>

                    <!-- CART -->
                    <div class="id-load-icon id-cart" title="cart">
                        <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <!-- Carrito -->
                            <path fill="currentColor"
                                d="M0 24C0 10.7 10.7 0 24 0H69.5c11 0 21 7.1 24.3 17.6L96 64h435.1c25.3 0 43.5 26.3 34.5 50.1l-58 155.4c-8.5 22.8-30.4 38.5-55.3 38.5H170.7l-9.8-51.5L120.4 80H24C10.7 80 0 69.3 0 56V24z" />

                            <!-- Patitas (ruedas) -->
                            <circle fill="currentColor" cx="176" cy="432" r="48" />
                            <circle fill="currentColor" cx="432" cy="432" r="48" />
                        </svg>
                    </div>

                    <!-- REGISTER -->
                    <div class="id-load-icon id-register" title="register">
                        <svg viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M0 448V378.4c0-4.8 .4-9.6 1.1-14.4L23.8 214.4C28.5 183.1 55.4 160 87 160H425c31.6 0 58.5 23.1 63.3 54.4l22.7 149.6c.7 4.8 1.1 9.6 1.1 14.4V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64z" />
                            <path fill="currentColor"
                                d="M64 0C46.3 0 32 14.3 32 32V96c0 17.7 14.3 32 32 32h80v32h64V128h80c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H64z" />
                        </svg>
                    </div>

                    <!-- REPORT -->
                    <div class="id-load-icon id-report" title="report">
                        <svg viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M505 44c11 13.8 8.8 33.9-5 45L340 217c-11.4 9.1-27.5 9.4-39.2 .6L192.6 136.5 52 249c-13.8 11-33.9 8.8-45-5s-8.8-33.9 5-45L172 71c11.4-9.1 27.5-9.4 39.2-.6l108.2 81.1L460 39c13.8-11 33.9-8.8 45 5z" />
                            <path fill="currentColor"
                                d="M192 224c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-17.7-14.3-32-32-32zM64 320c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32s32-14.3 32-32V352c0-17.7-14.3-32-32-32zm224 0V448c0 17.7 14.3 32 32 32s32-14.3 32-32V320c0-17.7-14.3-32-32-32s-32 14.3-32 32zm160-96c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-17.7-14.3-32-32-32z" />
                        </svg>
                    </div>

                    <!-- SALE -->
                    <div class="id-load-icon id-sale" title="sale">
                        <svg viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M477.6 19.8c-1.5-3.7-3.8-7.3-6.9-10.3C464.8 3.6 456.8 0 448 0H352c-17.7 0-32 14.3-32 32s14.3 32 32 32h18.7l-84.4 84.4L196.8 71.7c-12-10.3-29.7-10.3-41.7 0l-112 96c-13.4 11.5-15 31.7-3.5 45.1s31.7 15 45.1 3.5L176 138.1l91.2 78.1c12.7 10.9 31.6 10.2 43.5-1.7L416 109.3" />
                            <path fill="currentColor"
                                d="M48 256c-26.5 0-48 21.5-48 48V464c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48H48z" />
                        </svg>
                    </div>

                    <!-- INVENTORY -->
                    <div class="id-load-icon id-inventory" title="inventory">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                            <!-- PRIMARY (forma principal) -->
                            <path class="primary"
                                d="M176 48A48 48 0 1 0 80 48a48 48 0 1 0 96 0zM144 306.7V241.7l19 28.5c4.6 7 11 12.6 18.5 16.3l60.2 30.1c15.8 7.9 35 1.5 42.9-14.3s1.5-35-14.3-42.9l-56.4-28.2L166.5 160c-13.3-20-35.8-32-59.9-32C74.2 128 48 154.2 48 186.6v88.1c0 17 6.7 33.3 18.7 45.3l79.4 79.4 14.3 85.9c2.9 17.4 19.4 29.2 36.8 26.3s29.2-19.4 26.3-36.8l-15.2-90.9c-1.6-9.9-6.3-19-13.4-26.1l-51-51zM2.3 468.1c-6.6 16.4 1.4 35 17.8 41.6s35-1.4 41.6-17.8l37.6-94L50.1 348.6 2.3 468.1zM464 48a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm32 258.7l-51 51c-7.1 7.1-11.8 16.2-13.4 26.1l-15.2 90.9c-2.9 17.4 8.9 33.9 26.3 36.8s33.9-8.9 36.8-26.3l14.3-85.9L573.3 320c12-12 18.7-28.3 18.7-45.3V186.6c0-32.4-26.2-58.6-58.6-58.6c-24.1 0-46.5 12-59.9 32l-47.4 71.1-56.4 28.2c-15.8 7.9-22.2 27.1-14.3 42.9s27.1 22.2 42.9 14.3l60.2-30.1c7.5-3.7 13.8-9.4 18.5-16.3l19-28.5v65.1zM637.7 468.1L589.9 348.6l-49.2 49.2 37.6 94c6.6 16.4 25.2 24.4 41.6 17.8s24.4-25.2 17.8-41.6z" />

                            <!-- SECONDARY (detalles que dan forma a lo que están agarrando) -->
                            <path class="secondary"
                                d="M248.6 319.2c-2.4-.6-4.7-1.4-7-2.5l-.6-.3c2.4 1.2 4.9 2.2 7.5 2.8zm134.7 .8H256.6c11.5-.2 22.5-6.7 28-17.7c7.9-15.8 1.5-35-14.3-42.9L224 236.2V160c0-17.7 14.3-32 32-32H384c17.7 0 32 14.3 32 32v76.2l-46.3 23.2c-15.8 7.9-22.2 27.1-14.3 42.9c5.5 11 16.5 17.4 28 17.7zm8.5-1c2.5-.6 4.8-1.5 7-2.7l-.5 .3c-2.1 1.1-4.3 1.9-6.5 2.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <!-- Start Sidebar -->
        <aside id="app-menu" class="app-menu">

<div class="logo-box sticky top-0 flex min-h-topbar-height items-center justify-center px-6 transition-all duration-300">
    <a href="index.html">
        <span class="logo-lg text-2xl font-extrabold tracking-wide text-gray-900 dark:text-white select-none">
            Mytems
        </span>

        <span class="logo-sm hidden text-2xl font-extrabold tracking-wide text-gray-900 dark:text-white select-none">
            M
        </span>
    </a>
</div>

            <!-- Sidenav Menu Toggle Button -->
            <div class="absolute top-0 end-5 flex h-topbar items-center justify">
                <button id="button-hover-toggle">
                    <i class="iconify tabler--circle size-5"></i>
                </button>
            </div>

            <!-- Sidenav Menu Item Link -->
            <div class="relative min-h-0 flex-grow">
                <div class="size-full" data-simplebar>
                    <ul class="side-nav p-3 hs-accordion-group">
                        <li class="menu-title">
                            <span>Overview</span>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="monitor-dot"></i></span>
                                <span class="menu-text"> Dashboards </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="dashboards-analytics.html" class="menu-link">
                                        <span class="menu-text"> Analytics </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="index.html" class="menu-link">
                                        <span class="menu-text"> Ecommerce </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="dashboards-email.html" class="menu-link">
                                        <span class="menu-text"> Email </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="dashboards-hr.html" class="menu-link">
                                        <span class="menu-text"> HR </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="picture-in-picture-2"></i> </span>
                                <span class="menu-text"> Landing Page </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="onepage-landing.html" target="_blank" class="menu-link">
                                        <span class="menu-text"> One Page </span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="product-landing.html" target="_blank" class="menu-link">
                                        <span class="menu-text"> Product </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">
                            <span>Apps</span>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link" href="apps-chat.html">
                                <span class="menu-icon"><i data-lucide="messages-square"></i></span>
                                <div class="menu-text">Chat</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link" href="apps-calendar.html">
                                <span class="menu-icon"><i data-lucide="calendar-1"></i></span>
                                <div class="menu-text">Calendar</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link" href="apps-mailbox.html">
                                <span class="menu-icon"><i data-lucide="mail"></i></span>
                                <div class="menu-text">Email</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link" href="apps-notes.html">
                                <span class="menu-icon"><i data-lucide="clipboard-list"></i></span>
                                <div class="menu-text">Notes</div>
                            </a>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="shopping-bag"></i></span>
                                <span class="menu-text"> Ecommerce </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="apps-ecommerce-product-list.html" class="menu-link">
                                        <span class="menu-text">Products</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-product-grid.html" class="menu-link">
                                        <span class="menu-text">Products Grid</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-product-overview.html" class="menu-link">
                                        <span class="menu-text">Product Details</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-cart.html" class="menu-link">
                                        <span class="menu-text">Shopping Cart</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-checkout.html" class="menu-link">
                                        <span class="menu-text">Checkout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-product-create.html" class="menu-link">
                                        <span class="menu-text">Add Products</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-orders.html" class="menu-link">
                                        <span class="menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-order-overview.html" class="menu-link">
                                        <span class="menu-text">Order Details</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-ecommerce-sellers.html" class="menu-link">
                                        <span class="menu-text">Sellers</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="circuit-board"></i></span>
                                <span class="menu-text"> HR Management </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hs-accordion-group hidden">
                                <li class="menu-item">
                                    <a href="apps-hr-employee.html" class="menu-link">
                                        <span class="menu-text">Employee List</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-hr-holidays.html" class="menu-link">
                                        <span class="menu-text">Holidays</span>
                                    </a>
                                </li>
                                <li class="menu-item hs-accordion">
                                    <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                        <span class="menu-text"> Leave Manage </span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <ul class="sub-menu hs-accordion-content hidden">
                                        <li class="menu-item">
                                            <a href="apps-hr-leave-employee.html" class="menu-link">
                                                <span class="menu-text">By Employee</span>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="apps-hr-create-leave-employee.html" class="menu-link">
                                                <span class="menu-text">Add Leave(Employee)</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-leave.html" class="menu-link">
                                                <span class="menu-text">By HR</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-create-leave.html" class="menu-link">
                                                <span class="menu-text">Add Leave(HR)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item hs-accordion">
                                    <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                        <span class="menu-text"> Attendance </span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <ul class="sub-menu hs-accordion-content hidden">
                                        <li class="menu-item">
                                            <a href="apps-hr-attendance.html" class="menu-link">
                                                <span class="menu-text">Attendance(HR)</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-attendance-main.html" class="menu-link">
                                                <span class="menu-text">Main Attendance</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-hr-department.html" class="menu-link">
                                        <span class="menu-text">Department</span>
                                    </a>
                                </li>
                                <li class="menu-item hs-accordion">
                                    <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                        <span class="menu-text"> Sales </span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <ul class="sub-menu hs-accordion-content hidden">
                                        <li class="menu-item">
                                            <a href="apps-hr-sales-estimates.html" class="menu-link">
                                                <span class="menu-text">Estimates</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-sales-payments.html" class="menu-link">
                                                <span class="menu-text">Payments</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-sales-expenses.html" class="menu-link">
                                                <span class="menu-text">Expenses</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item hs-accordion">
                                    <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                        <span class="menu-text"> Payroll </span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <ul class="sub-menu hs-accordion-content hidden">
                                        <li class="menu-item">
                                            <a href="apps-hr-payroll-employee-salary.html" class="menu-link">
                                                <span class="menu-text">Employee Salary</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-payroll-payslip.html" class="menu-link">
                                                <span class="menu-text">Payslip</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="apps-hr-payroll-create-payslip.html" class="menu-link">
                                                <span class="menu-text">Create Payslip</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="file-text"></i></span>
                                <span class="menu-text"> Invoice </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="apps-invoice-overview.html" class="menu-link">
                                        <span class="menu-text">Overview</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-invoice-list.html" class="menu-link">
                                        <span class="menu-text">List Invoice</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-invoice-add-new.html" class="menu-link">
                                        <span class="menu-text">Add Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="square-user-round"></i></span>
                                <span class="menu-text"> Users </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="apps-users-list.html" class="menu-link">
                                        <span class="menu-text">List View</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="apps-users-grid.html" class="menu-link">
                                        <span class="menu-text">Grid View</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">
                            <span>Extra</span>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="codesandbox"></i></span>
                                <span class="menu-text"> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="pages-account.html" class="menu-link">
                                        <span class="menu-text">Account</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-account-settings.html" class="menu-link">
                                        <span class="menu-text">Account Settings</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-starter.html" class="menu-link">
                                        <span class="menu-text">Starter Page</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-pricing.html" class="menu-link">
                                        <span class="menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-faqs.html" class="menu-link">
                                        <span class="menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-contact-us.html" class="menu-link">
                                        <span class="menu-text">Contact Us</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-timeline.html" class="menu-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-coming-soon.html" class="menu-link">
                                        <span class="menu-text">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-maintenance.html" class="menu-link">
                                        <span class="menu-text">Maintenance</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-404.html" class="menu-link">
                                        <span class="menu-text">404</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-offline.html" class="menu-link">
                                        <span class="menu-text">Offline</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="lock"></i></span>
                                <span class="menu-text"> Basic Auth </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="auth-basic-login.html" class="menu-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-verify-email.html" class="menu-link">
                                        <span class="menu-text">Verify Email</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-two-steps.html" class="menu-link">
                                        <span class="menu-text">Two Steps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-logout.html" class="menu-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-reset-password.html" class="menu-link">
                                        <span class="menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-basic-create-password.html" class="menu-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="shield-check"></i></span>
                                <span class="menu-text"> Cover Auth </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="auth-cover-login.html" class="menu-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-verify-email.html" class="menu-link">
                                        <span class="menu-text">Verify Email</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-two-steps.html" class="menu-link">
                                        <span class="menu-text">Two Steps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-logout.html" class="menu-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-reset-password.html" class="menu-link">
                                        <span class="menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-cover-create-password.html" class="menu-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="package"></i></span>
                                <span class="menu-text"> Boxed Auth </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="auth-boxed-login.html" class="menu-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-boxed-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-boxed-two-steps.html" class="menu-link">
                                        <span class="menu-text">Two Steps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-boxed-logout.html" class="menu-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-boxed-reset-password.html" class="menu-link">
                                        <span class="menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-boxed-create-password.html" class="menu-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="fingerprint"></i></span>
                                <span class="menu-text"> Modern Auth </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="auth-modern-login.html" class="menu-link">
                                        <span class="menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-verify-email.html" class="menu-link">
                                        <span class="menu-text">Verify Email</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-two-steps.html" class="menu-link">
                                        <span class="menu-text">Two Steps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-logout.html" class="menu-link">
                                        <span class="menu-text">Logout</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-reset-password.html" class="menu-link">
                                        <span class="menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="auth-modern-create-password.html" class="menu-link">
                                        <span class="menu-text">Create Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="layout-panel-left"></i></span>
                                <span class="menu-text"> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="layouts-sidenav-hover.html" target="_blank" class="menu-link">Hover
                                        Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-hover-active.html" target="_blank"
                                        class="menu-link">Hover Active Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-small.html" target="_blank" class="menu-link">Small
                                        Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-compact.html" target="_blank" class="menu-link">Compact
                                        Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-offcanvas.html" target="_blank"
                                        class="menu-link">Offcanvas Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-hidden.html" target="_blank" class="menu-link">Hidden
                                        Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-sidenav-dark.html" target="_blank" class="menu-link">Dark
                                        Sidenav</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-dark-mode.html" target="_blank" class="menu-link">Dark Mode</a>
                                </li>
                                <li class="menu-item">
                                    <a href="layouts-rtl-mode.html" target="_blank" class="menu-link">RTL Mode</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title">
                            <span>Components</span>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="life-buoy"></i></span>
                                <span class="menu-text"> UI Elements </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-avatar.html" class="menu-link">
                                        <span class="menu-text">Avatar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-buttons.html" class="menu-link">
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-label.html" class="menu-link">
                                        <span class="menu-text">Label</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-cards.html" class="menu-link">
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-collapse.html" class="menu-link">
                                        <span class="menu-text">Collapse</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-countdown.html" class="menu-link">
                                        <span class="menu-text">Countdown</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-drawer.html" class="menu-link">
                                        <span class="menu-text">Drawer</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-dropdown.html" class="menu-link">
                                        <span class="menu-text">Dropdown</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-gallery.html" class="menu-link">
                                        <span class="menu-text">Gallery</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-lists.html" class="menu-link">
                                        <span class="menu-text">Lists</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-modal.html" class="menu-link">
                                        <span class="menu-text">Modal</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-spinners.html" class="menu-link">
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-timeline.html" class="menu-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-progress-bar.html" class="menu-link">
                                        <span class="menu-text">Progress Bar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-tooltip.html" class="menu-link">
                                        <span class="menu-text">Tooltip</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-video.html" class="menu-link">
                                        <span class="menu-text">Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="package-plus"></i></span>
                                <span class="menu-text"> Plugins </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="plugins-sweetalert.html" class="menu-link">
                                        <span class="menu-text">Sweetalert</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="plugins-simplebar.html" class="menu-link">
                                        <span class="menu-text">Simplebar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="plugins-lightbox.html" class="menu-link">
                                        <span class="menu-text">Lightbox</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="plugins-video-player.html" class="menu-link">
                                        <span class="menu-text">Video Player</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="locate-fixed"></i></span>
                                <span class="menu-text"> Navigation </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="navigation-navbars.html" class="menu-link">
                                        <span class="menu-text">Navbar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="navigation-tabs.html" class="menu-link">
                                        <span class="menu-text">Tabs</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="navigation-breadcrumb.html" class="menu-link">
                                        <span class="menu-text">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="navigation-pagination.html" class="menu-link">
                                        <span class="menu-text">Pagination</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="file"></i></span>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="forms-basic.html" class="menu-link">
                                        <span class="menu-text">Basic</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-layouts.html" class="menu-link">
                                        <span class="menu-text">Layouts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-input-mask.html" class="menu-link">
                                        <span class="menu-text">Input Mask </span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-select.html" class="menu-link">
                                        <span class="menu-text">Select</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="forms-checkbox-radio.html" class="menu-link">
                                        <span class="menu-text">Checkbox & Radio</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-switches.html" class="menu-link">
                                        <span class="menu-text">Switches</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-wizard.html" class="menu-link">
                                        <span class="menu-text">Wizards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-file-upload.html" class="menu-link">
                                        <span class="menu-text">File Upload</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-datepicker.html" class="menu-link">
                                        <span class="menu-text">Date Picker</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-timepicker.html" class="menu-link">
                                        <span class="menu-text">Time Picker</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="forms-colorpicker.html" class="menu-link">
                                        <span class="menu-text">Color Picker </span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-multi-select.html" class="menu-link">
                                        <span class="menu-text">Multi Select</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-input-spin.html" class="menu-link">
                                        <span class="menu-text">Input Spin</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="forms-clipboard.html" class="menu-link">
                                        <span class="menu-text">Clipboard</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="forms-editor.html" class="menu-link">
                                        <span class="menu-text">Editor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="table"></i></span>
                                <span class="menu-text"> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="tables-basic.html" class="menu-link">
                                        <span class="menu-text">Basic Table</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tables-gridjs.html" class="menu-link">
                                        <span class="menu-text">Grid Js</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="pie-chart"></i></span>
                                <span class="menu-text"> Apexcharts </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="charts-apex-area.html" class="menu-link">
                                        <span class="menu-text">Area</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-bar.html" class="menu-link">
                                        <span class="menu-text">Bar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-boxplot.html" class="menu-link">
                                        <span class="menu-text">Boxplot</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-bubble.html" class="menu-link">
                                        <span class="menu-text">Bubble</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-candlstick.html" class="menu-link">
                                        <span class="menu-text">Candlstick</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-column.html" class="menu-link">
                                        <span class="menu-text">Column</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-funnel.html" class="menu-link">
                                        <span class="menu-text">Funnel</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-heatmap.html" class="menu-link">
                                        <span class="menu-text">Heatmap</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-line.html" class="menu-link">
                                        <span class="menu-text">Line</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-mixed.html" class="menu-link">
                                        <span class="menu-text">Mixed</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-pie.html" class="menu-link">
                                        <span class="menu-text">Pie</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-polar.html" class="menu-link">
                                        <span class="menu-text">Polar Area</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-radar.html" class="menu-link">
                                        <span class="menu-text">Radar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-radialbar.html" class="menu-link">
                                        <span class="menu-text">Radialbar</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-range-area.html" class="menu-link">
                                        <span class="menu-text">Range Area</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-scatter.html" class="menu-link">
                                        <span class="menu-text">Scatter</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-timeline.html" class="menu-link">
                                        <span class="menu-text">Timeline</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-apex-treemap.html" class="menu-link">
                                        <span class="menu-text">Treemap</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="trophy"></i></span>
                                <span class="menu-text"> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="icons-remix.html" class="menu-link">
                                        <span class="menu-text">Remix</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons-lucide.html" class="menu-link">
                                        <span class="menu-text">Lucide</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="map"></i></span>
                                <span class="menu-text"> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="maps-google.html" class="menu-link">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="maps-leaflet.html" class="menu-link">
                                        <span class="menu-text">Leaflet Map</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)" class="hs-accordion-toggle menu-link">
                                <span class="menu-icon"><i data-lucide="share-2"></i></span>
                                <span class="menu-text"> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul class="sub-menu hs-accordion-content hidden">
                                <li class="menu-item">
                                    <a href="javascript: void(0)" class="menu-link">
                                        <span class="menu-text">Item 1</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="javascript: void(0)" class="menu-link">
                                        <span class="menu-text">Item 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>

        </aside>
        <!-- End Sidebar -->
        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- Topbar Start -->
            <div
                class="app-header min-h-topbar-height flex items-center sticky top-0 z-30 bg-(--topbar-background) border-b border-default-200">
                <div class="w-full flex items-center justify-between px-6">
                    <div class="flex items-center gap-5">
                        <!-- Sidenav Menu Toggle Button -->
                        <button id="button-toggle-menu"
                            class="btn btn-icon size-9 bg-default-400/10 hover:bg-default-150 rounded">
                            <i class="iconify lucide--align-left text-xl"></i>
                        </button>

                        <!-- Topbar Search -->
                        <div class="lg:flex hidden items-center relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="iconify tabler--search text-base"></i>
                            </div>

                            <input type="search" id="topbar-search"
                                class="form-input px-12 text-sm rounded border-transparent focus:border-transparent w-60"
                                placeholder="Search something...">

                            <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-4">
                                <span class="ms-auto font-medium">⌘ K</span>
                            </button>
                        </div>

                    </div>

                    <div class="flex items-center gap-3">

                        <!-- Language Dropdown Button -->
                        <div class="topbar-item hs-dropdown [--placement:bottom-right] relative inline-flex">
                            <button
                                class="hs-dropdown-toggle btn btn-icon size-8 hover:bg-default-150 rounded-full relative"
                                type="button" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGwABAAIDAQEAAAAAAAAAAAAAAAMHAgQFBgH/xAA3EAAABAEHCQcEAwEAAAAAAAABAgMEAAUGBxESExYUFTFVVpKh0dMhIjIzQZGTI0JR0iVFYYL/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAgYBBAUDB//EADIRAAACAxACAgEFAAAAAAAAAAABAgPwBAUREhMUFSExUVJTVIGCoUFxMpHRIkJDYeH/2gAMAwEAAhEDEQA/APLDJaK0nN3RxUaLKJuFjuXQjdOjJnAATbCUgiJ+3ttDpi1xoDgtss8exrDdGb7POxksnd2AUMnmb+yAAQvL0Qu7Fi1wiMocXx78WhANZvIbQzUwmWFW3kg5xStC1a5QIgcjqsloDBV9sSNYcP3V5P0A7M0JGkfEEkpSgquyaOE3V/KIiFwtdCcCGbiJAGz3QAa/WOc+kCShKMdVXsh03nXLVboRNUjGTrqvqFm4Xo32iU9y/pFUklWIXOknxyC7/IYXo32iU9y/pCSVYgpJ8cgu/wAhhejfaJT3L+kJJViCknxyC7/I+lmzRyUwGLONQDANYCAlAQEP+ISSrEMG+L4n/ATbinmhQQkZFU4ZKDhq7IVd2ALpOBBQoWGxLA3KgaLden1CL0lWlfWVnj3ePnQ6Qtv5AZPyZe9Byc+abRc5FDJK7zLLuoU/Wxw9Y84aoYfFv7bbgEDcxDppOwUIoRsWTinfopARq2G0PdeN7v65gq8XrV6xI7r41Xk/R+AG9No8kNJxSO8lZis4k5Ur0xjJmC4X7yhSnbJfSuilNpLXGi+SSJKEo1Zfpq8+LR03nVrk3QiSk4qdcB7ejFj4hor1E49g60VWUU4W+xc5g+mci3EMQ0V6icewdaEopwt9hMH0zkW4hiGivUTj2DrQlFOFvsJg+mci3EMQ0V6icewdaEopwt9hMH0zkW4itCTLn80albtJuPEXBk1m75eyKpVk1DAIAUogJSVAFVoo9sXWcKjOE0i/ofO4hicZqTzFwKWFHuZr0Vyyd37YKCld2sos3mnvVaIjLq4PmUa//AiHcME5r0igUqys3nikotgblk92CdkESthEQKZMC2Fa+ztNxjJr1OIoK4dwiJDrzQkGe8lziYSsE13AOm5XAu1FQNdrHXtVGAlQASoDVVFjTfB0IyJkicY6oCG89znQTXESxKIhXCYsrFE/dmC7h+cVyVWYRZKNcOo7IMUT92YLuH5wlVmEKNcOo7IMUT92YLuH5wlVmEKNcOo7IMUT92YLuH5wlVmEKNcOo7IZ5kpZ1014dCERdeTbCM8erKTbmGZKWddNeHQhEXXk2wTx6spNuYZkpZ1014dCERdeTbBPHqyk25hmSlnXTXh0IRF15NsE8erKTbmGZKWddNeHQhEXXk2wTx6spNuYZkpZ1014dCERdeTbBPHqyk25hmSlnXTXh0IRF15NsE8erKTbmGZKWddNeHQhEXXk2wTx6spNuY4+F5nbWj8hOceckhiHQpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abox4Jx56nl+I3l+DT9v8An4jTMWlD4lbvaI92MCQbsADdgAbsADdgAbsAEjfz0/L8RfM8Gn7v8/MZIRT+J27Wj//Z"
                                    alt="" class="size-4.5 rounded">
                            </button>

                            <div class="hs-dropdown-menu" role="menu" aria-orientation="vertical"
                                aria-labelledby="dropdown-menu">
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGwABAAIDAQEAAAAAAAAAAAAAAAMHAgQFBgH/xAA3EAAABAEHCQcEAwEAAAAAAAABAgMEAAUGBxESExYUFTFVVpKh0dMhIjIzQZGTI0JR0iVFYYL/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAgYBBAUDB//EADIRAAACAxACAgEFAAAAAAAAAAABAgPwBAUREhMUFSExUVJTVIGCoUFxMpHRIkJDYeH/2gAMAwEAAhEDEQA/APLDJaK0nN3RxUaLKJuFjuXQjdOjJnAATbCUgiJ+3ttDpi1xoDgtss8exrDdGb7POxksnd2AUMnmb+yAAQvL0Qu7Fi1wiMocXx78WhANZvIbQzUwmWFW3kg5xStC1a5QIgcjqsloDBV9sSNYcP3V5P0A7M0JGkfEEkpSgquyaOE3V/KIiFwtdCcCGbiJAGz3QAa/WOc+kCShKMdVXsh03nXLVboRNUjGTrqvqFm4Xo32iU9y/pFUklWIXOknxyC7/IYXo32iU9y/pCSVYgpJ8cgu/wAhhejfaJT3L+kJJViCknxyC7/I+lmzRyUwGLONQDANYCAlAQEP+ISSrEMG+L4n/ATbinmhQQkZFU4ZKDhq7IVd2ALpOBBQoWGxLA3KgaLden1CL0lWlfWVnj3ePnQ6Qtv5AZPyZe9Byc+abRc5FDJK7zLLuoU/Wxw9Y84aoYfFv7bbgEDcxDppOwUIoRsWTinfopARq2G0PdeN7v65gq8XrV6xI7r41Xk/R+AG9No8kNJxSO8lZis4k5Ur0xjJmC4X7yhSnbJfSuilNpLXGi+SSJKEo1Zfpq8+LR03nVrk3QiSk4qdcB7ejFj4hor1E49g60VWUU4W+xc5g+mci3EMQ0V6icewdaEopwt9hMH0zkW4hiGivUTj2DrQlFOFvsJg+mci3EMQ0V6icewdaEopwt9hMH0zkW4itCTLn80albtJuPEXBk1m75eyKpVk1DAIAUogJSVAFVoo9sXWcKjOE0i/ofO4hicZqTzFwKWFHuZr0Vyyd37YKCld2sos3mnvVaIjLq4PmUa//AiHcME5r0igUqys3nikotgblk92CdkESthEQKZMC2Fa+ztNxjJr1OIoK4dwiJDrzQkGe8lziYSsE13AOm5XAu1FQNdrHXtVGAlQASoDVVFjTfB0IyJkicY6oCG89znQTXESxKIhXCYsrFE/dmC7h+cVyVWYRZKNcOo7IMUT92YLuH5wlVmEKNcOo7IMUT92YLuH5wlVmEKNcOo7IMUT92YLuH5wlVmEKNcOo7IZ5kpZ1014dCERdeTbCM8erKTbmGZKWddNeHQhEXXk2wTx6spNuYZkpZ1014dCERdeTbBPHqyk25hmSlnXTXh0IRF15NsE8erKTbmGZKWddNeHQhEXXk2wTx6spNuYZkpZ1014dCERdeTbBPHqyk25hmSlnXTXh0IRF15NsE8erKTbmGZKWddNeHQhEXXk2wTx6spNuY4+F5nbWj8hOceckhiHQpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abowwvM7a0fkJzhJIYgpJ2abox4Jx56nl+I3l+DT9v8An4jTMWlD4lbvaI92MCQbsADdgAbsADdgAbsAEjfz0/L8RfM8Gn7v8/MZIRT+J27Wj//Z"
                                        alt="" class="size-4 rounded-full">
                                    English
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGwABAAIDAQEAAAAAAAAAAAAAAAQFAQMHAgb/xAAxEAABAwEGAwUIAwAAAAAAAAABAgMEAAUGERJVkxZR0RUyM5LSExQiMTRBQmJhcZH/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAgYDBAUBB//EAC0RAAIBAQYFAwMFAAAAAAAAAAABAgMRExQxUpEEEiFBUSJxoTJhgQWxwdHw/9oADAMBAAIRAxEAPwCkU44tRUpRUpRxUokkkn7muWfTEjGZXM0AzK5mgGZXM0AzK5mgGZXM0AzK5mgMpccQoKSopUk4pUCQQR9xQNHeOwLC06Lst+mqPiauqW7K7fT8vc8rsW7bTa3ZEOGww0lS3HVsthKUpGJJ+Gs3DzrVZqKm1b92eOtU7OTZWQJdxJs9cJuI0y7nyMLkQw0hxWOXLmKfhOcEAKw5fOunPgqlj5ar3z6e/wDkTnfxipPLvZK2wtewLC06Lst+muNiauqW7I30/L3HYFhadF2W/TTE1dUt2L6fl7jsCwtOi7LfppiauqW7F9Py9x2BYWnRdlv00xNXVLdi+n5e47AsLTouy36aYmrqluxfT8vcn1gMZ8veF8QkFMWJLie9voVaMlXu7iS2oFGZKG1POAKCRhmb/wAqwLhYqEJW2vktSfn7ZfLNjhvW+ri+XLP+bFszNxrTuq4p9qQuL73FlqBelZY6xHKQEFJIZBVmCsRhiKsFD9LhcRlWj9a1P+zR4rinOpKFNy9KySt9XyXMERVyHpbUKQw7IOWQ+6uOptZaOVASGnHFAhJ/ICqrx3DqnRptO3rL2z7dLfe38Gbml9LaaXvb191+xOrkgUAoBQCgKSREctGG9CFlpsrMQtUkeyV7VYcCiVhtRUSeZrt1+JppU7JqXKrOilv1SRHh6s1NuSl+WvghP3FQiOlMaW0VvtluaS0oHEqcwWjAjMcruHxfcA/xWatx1Hkj6pSce3bt5yyNilxVkm3Czb5LmKsmXk7ITF9mlSDaGLRW6kKGUKyEr/rGtTi6sJUIRU4uUeyUrevXurOmWZpwlPmdttnurPx17k+uSZhQCgFAcK4ovHqcreX1q7YOjojsWG4p6UOKLx6nK3l9aYOjojsLinpQ4ovHqcreX1pg6OiOwuKelDii8epyt5fWmDo6I7C4p6UOKLx6nK3l9aYOjojsLinpQ4ovHqcreX1pg6OiOwuKelDii8epyt5fWmDo6I7C4p6UOKLx6nK3l9aYOjojsLinpRDk/Uu+F31eF3Pn+H68q2mSjkszX5a8JDy0A8tAPLQDy0A8tAbI31LXhd9Pi9z5/n+vOvURlk8z/9k="
                                        alt="" class="size-4 rounded-full">
                                    Spanish
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGQABAQEAAwAAAAAAAAAAAAAAAAEGAgUH/8QAKBAAAQIBDQADAQAAAAAAAAAAAAECAwUSFhcxUVRVkaKj0uMhMkGB/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAEFAgQGB//EACQRAQAAAgoDAQAAAAAAAAAAAAAWYgIDBBQVUVKhouEBsdEx/9oADAMBAAIRAxEAPwDzZ8WK97nve5z3Kqucqqqqq/KqqqbCEnOvUkJzr1ATnXqAnOvUBOdeoCc69QKyLFY9r2Pc17VRWuRVRUVPlFRUIHZUZlvDb4fY1r5VZ+1zD1t0cqP0ozLeG3w+wvlVn7IetujlR+lGZbw2+H2F8qs/ZD1t0cqP0ozLeG3w+wvlVn7IetujlR+lGZbw2+H2F8qs/ZD1t0cqP0ozLeG3w+wvlVn7IetujlR+lGZbw2+H2F8qs/ZD1t0cqP0ozLeG3w+wvlVn7IetujlR+t0Ub04AAAAAAAA3dV6ZnwehSYxJv05uIZOXRVemZ8HoMYk36Ihk5dFV6ZnwegxiTfoiGTl0VXpmfB6DGJN+iIZOXRVemZ8HoMYk36Ihk5dFV6ZnwegxiTfoiGTl0VXpmfB6DGJN+iIZOXRVemZ8HoMYk36Ihk5dN2UjmwAAAAAAADk77LZb+Wfwzp/vn8R4TQxDQBoA0AaANAK37JZb+2f0yofvj8PL/9k="
                                        alt="" class="size-4 rounded-full">
                                    German
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">

                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAYHCAMBAv/EAC8QAAEDAQUGAwkAAAAAAAAAAAABAgM2BwgxM3QRMjRRsbMERJIGEhYhQmFicXP/xAAbAQACAwEBAQAAAAAAAAAAAAAABwMFBgQBAv/EACIRAQAAAwkBAQAAAAAAAAAAAAABMTIDBAUGMzSBgsERAv/aAAwDAQACEQMRAD8AQHyyPe573q57lVXOVVVVVcVVTY/HI+fedzUApt3tVX27m2r5CbuRldielyks5tIGfTgAjVrKr8VJ8/LR9XFZe6zEyxte0fCXtXmcrRfHrXva5HNcrXNXaiouxUVAeRhCKcjOI8AFOu913NoJu5GV2KaXKSzm0gZ9OACM2s1Wmmj6uKy91mJlja9o+Ew5WiABOhnEcACnXe67m0E3cjK7FNLlJZzaQM+nABGbWarTTR9XFZe6zEyxte0fCYcrRAAnQziOABTrvddzaCbuRldimlyks5tIGfTgAjNrNVppo+risvdZiZY2vaPhMOVogAToZxHAAp13uu5tBN3IyuxTS5SWc2kDPpwARm1mq000fVxWXusxMsbXtHwmHK0QAEPxfFTZO+7Ky8V3Px5DMhIjnL0HoUy77XUu7wM2H9IyuxPS5SWc2jygTgAjVrFVJhw0eP7cVl7rMPLG17R8JnpOVoXTw+fHl7zczcx+r7cz2D5/dMZ8Tf/Z"
                                        alt="" class="size-4 rounded-full">
                                    French
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20id='flag-icons-jp'%20viewBox='0%200%20512%20512'%3e%3cdefs%3e%3cclipPath%20id='a'%3e%3cpath%20fill-opacity='.7'%20d='M177.2%200h708.6v708.7H177.2z'/%3e%3c/clipPath%3e%3c/defs%3e%3cg%20fill-rule='evenodd'%20stroke-width='1pt'%20clip-path='url(%23a)'%20transform='translate(-128)%20scale(.72249)'%3e%3cpath%20fill='%23fff'%20d='M0%200h1063v708.7H0z'/%3e%3ccircle%20cx='523.1'%20cy='344.1'%20r='194.9'%20fill='%23d30000'%20transform='translate(-59.7%20-34.5)%20scale(1.1302)'/%3e%3c/g%3e%3c/svg%3e"
                                        alt="" class="size-4 rounded-full">
                                    Japanese
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAGgAAAwEBAQEAAAAAAAAAAAAAAAYHBAECA//EACsQAAEDAQYEBgMAAAAAAAAAAAABAgMHETEzNnSxFjJRsiE0QkRhkgRxcv/EABsBAAIDAQEBAAAAAAAAAAAAAAAGBAUHAwEC/8QAIREBAAEDBQEBAQEAAAAAAAAAAAEGMjQDBHKCwTECEYH/2gAMAwEAAhEDEQA/ANznvc5XOcquVbVVVtVVUyeZmVa5avUAcqUqvE0nj7WTvYX9OZE8Z8dtC5XR5TAARqrKrxUnj7aPdxWbu9olMYvafCXavUimL+Ote9rkc1ytc1bUVFsVFQHkxEtAiMIAA50pzNJpZO9hfU5kTxnx20LldHpMABGas5rTTR7uKzd3tEpjF7T4TCKYgAaREYOABzpTmaTSyd7C+pzInjPjtoXK6PSYACM1ZzWmmj3cVm7vaJTGL2nwmEUxAA0iIwcADnSnM0mlk72F9TmRPGfHbQuV0ekwAEZqzmtNNHu4rN3e0SmMXtPhMIpiABpERg4AHOlOZpNLJ3sL6nMieM+O2hcro9JgAIzVnNaaaPdxWbu9olMYvafCYRTEADfPjyYfMuHyX+n46CP+/s/GDy8fU+QcaVZmku8tJd/TC+pzInjPjtoXK6PKYACNVYzUl3lo7/24rN3e0OmMXtPhM+pFML6fj48eHzNxOS/1fHU9h8/u2fv+fX//2Q=="
                                        alt="" class="size-4 rounded-full">
                                    Italian
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx//2wBDAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCAAqAEADAREAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAAMGCP/EACgQAAEABwcFAQAAAAAAAAAAAAABBAcWF1RVMjOSo6TT4gIDMUJRYf/EABkBAQADAQEAAAAAAAAAAAAAAAABAgYEA//EACMRAQAABAcBAAMAAAAAAAAAAAABFmOiAxMVUqHR4jECMoH/2gAMAwEAAhEDEQA/AOnAAAAAAAAAGIjUzOs6Za2js0/G28w7UzIEamZ1nTLW0NPxtvMOzMgRqZnWdMtbQ0/G28w7MyBGpmdZ0y1tDT8bbzDszIEamZ1nTLW0NPxtvMOzMgRqZnWdMtbQ0/G28w7MyBGpmdZ0y1tDT8bbzDszIEamZ1nTLW0NPxtvMOzMg5YNK5wAAAAAAADRuiiay+RmJjp3eW4kyrZ6HRRNZfITHTu8kmVbPQ6KJrL5CY6d3kkyrZ6HRRNZfITHTu8kmVbPQ6KJrL5CY6d3kkyrZ6HRRNZfITHTu8kmVbPQ6KJrL5CY6d3kkyrZ6HRRNZfITHTu8kmVbPTRGYbkAAAAAAAAssX/AHLu11Xdjz6/nwmLz/D9Yff79TwkLGEBhAYQGEBhAor3/bu7XTeWPPt+fSYK/n+sfv8APr//2Q=="
                                        alt="" class="size-4 rounded-full">
                                    Russian
                                </a>
                                <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                    href="#">
                                    <img src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20id='flag-icons-ae'%20viewBox='0%200%20512%20512'%3e%3cpath%20fill='%2300732f'%20d='M0%200h512v170.7H0z'/%3e%3cpath%20fill='%23fff'%20d='M0%20170.7h512v170.6H0z'/%3e%3cpath%20d='M0%20341.3h512V512H0z'/%3e%3cpath%20fill='red'%20d='M0%200h180v512H0z'/%3e%3c/svg%3e"
                                        alt="" class="size-4 rounded-full">
                                    Arabic
                                </a>
                            </div>
                        </div>

                        <!-- Light/Dark Mode Button -->
                        <div class="topbar-item">
                            <button class="btn btn-icon size-8 hover:bg-default-150 transition-[scale] rounded-full"
                                id="light-dark-mode" type="button">
                                <i
                                    class="iconify tabler--moon text-xl absolute dark:scale-0 dark:-rotate-90 scale-100 rotate-0 transition-all duration-200"></i>
                                <i
                                    class="iconify tabler--sun text-xl absolute dark:scale-100 dark:rotate-0 scale-0 rotate-90 transition-all duration-200"></i>
                            </button>
                        </div>

                        <!-- Notification Button -->
                        <div class="topbar-item hs-dropdown [--auto-close:inside] relative inline-flex">
                            <button type="button"
                                class="hs-dropdown-toggle btn btn-icon size-8 hover:bg-default-150 rounded-full relative"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <i data-lucide="bell-ring" class="size-4.5"></i>
                                <span class="absolute end-0 top-0 size-1.5 bg-primary/90 rounded-full"></span>
                            </button>

                            <div class="hs-dropdown-menu max-w-100 p-0" role="menu">
                                <!-- Header -->
                                <div class="p-4 border-b border-default-200">
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-base text-default-800">Notifications</h3>
                                        <span
                                            class="size-5 font-semibold bg-orange-500 rounded text-white flex items-center justify-center text-xs">15</span>
                                    </div>
                                </div>

                                <!-- Tabs -->
                                <nav class="flex gap-x-1 bg-default-150 p-2 border-b border-default-200"
                                    aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                    <button data-hs-tab="#tabsViewall" type="button"
                                        class="hs-tab-active:bg-card hs-tab-active:text-primary py-0.5 px-4 rounded font-semibold inline-flex items-center gap-x-2 border-b-2 border-transparent text-xs whitespace-nowrap text-default-500 active"
                                        aria-selected="true" aria-controls="tabsViewall" role="tab">
                                        View all
                                    </button>
                                    <button data-hs-tab="#tabsMentions" type="button"
                                        class="hs-tab-active:bg-card hs-tab-active:text-primary py-0.5 px-4 rounded font-semibold inline-flex items-center gap-x-2 border-b-2 border-transparent text-xs whitespace-nowrap text-default-500"
                                        aria-selected="false" aria-controls="tabsMentions" role="tab">
                                        Mentions
                                    </button>
                                    <button data-hs-tab="#tabsFollowers" type="button"
                                        class="hs-tab-active:bg-card hs-tab-active:text-primary py-0.5 px-4 rounded font-semibold inline-flex items-center gap-x-2 border-b-2 border-transparent text-xs whitespace-nowrap text-default-500"
                                        aria-selected="false" aria-controls="tabsFollowers" role="tab">
                                        Followers
                                    </button>
                                    <button data-hs-tab="#tabsInvites" type="button"
                                        class="hs-tab-active:bg-card hs-tab-active:text-primary py-0.5 px-4 rounded font-semibold inline-flex items-center gap-x-2 border-b-2 border-transparent text-xs whitespace-nowrap text-default-500"
                                        aria-selected="false" aria-controls="tabsInvites" role="tab">
                                        Invites
                                    </button>
                                </nav>

                                <!-- Tabs content -->
                                <div class="h-80" data-simplebar>
                                    <!-- View all -->
                                    <div id="tabsViewall" role="tabpanel" aria-labelledby="tabsViewall-item">
                                        <a href="#" class="flex gap-3 p-4 items-center hover:bg-default-150">
                                            <div>
                                                <div class="size-10 rounded-md  bg-default-100">
                                                    <img src="{{ asset('assets/avatar-3-CuoB696V.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full text-sm">
                                                <div>
                                                    <h6 class="mb-2 font-medium text-default-800"><b>@willie_passem</b>
                                                        followed you</h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Wednesday 03:42 PM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center  gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>4 sec
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="flex gap-3 p-4 items-start hover:bg-default-150">
                                            <div>
                                                <div class="size-10 rounded-md  bg-warning/10">
                                                    <img src="{{ asset('assets/avatar-5-ACaGxkSo.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full">
                                                <div class="text-sm">
                                                    <h6 class="mb-2 font-medium text-default-800">
                                                        <b>@caroline_jessica</b> commented <br>on your post</h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Wednesday 03:42 PM</span>
                                                    </p>

                                                    <p class="p-2  bg-default-50 text-default-500 mt-2 rounded">
                                                        Amazing! Fast, to the point, professional and really amazing to
                                                        work
                                                        with them!!!
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center gap-2 text-xs text-default-500">
                                                        <div>
                                                            <div class="size-1.5 bg-primary rounded-full"></div>
                                                        </div>15 min
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="flex gap-3 p-4 items-start hover:bg-default-150">
                                            <div>
                                                <div
                                                    class="size-10 rounded-md  bg-red-100 flex justify-center items-center">
                                                    <i data-lucide="shopping-bag" class="size-5 text-danger"></i>
                                                </div>
                                            </div>

                                            <div class="flex justify-between gap-2 w-full">
                                                <div>
                                                    <h6 class="mb-1 font-medium text-default-800 text-sm">Successfully
                                                        purchased a business plan for
                                                        <span class="text-danger">$199.99</span>
                                                    </h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Monday 11:26 AM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center  gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>yesterday
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="flex gap-3 p-4 items-center hover:bg-default-150">
                                            <div class="relative">
                                                <div class="size-10 rounded-md  bg-pink-100">
                                                    <img src="{{ asset('assets/avatar-7-QY-kCwjM.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                                <div class="absolute text-orange-500 bottom-0 -end-0.5 text-base">
                                                    <i data-lucide="heart" class="size-3.5 fill-orange-500"></i>
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full">
                                                <div>
                                                    <h6 class="mb-1 font-medium text-default-800  text-sm">
                                                        <b>@scott</b> liked your post</h6>
                                                    <p class="flex gap-1 items-center text-default-500 text-xs">
                                                        <i data-lucide="clock"
                                                            class="align-middle size-3.5"></i><span>Thursday 06:59
                                                            AM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>1 Week
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Mentions -->
                                    <div id="tabsMentions" class="hidden" role="tabpanel"
                                        aria-labelledby="tabsMentions-item">
                                        <a href="#" class="flex gap-3 p-4 items-start hover:bg-default-150">
                                            <div>
                                                <div class="size-10 rounded-md  bg-warning/10">
                                                    <img src="{{ asset('assets/avatar-5-ACaGxkSo.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full">
                                                <div class="text-sm">
                                                    <h6 class="mb-2 font-medium text-default-800">
                                                        <b>@caroline_jessica</b> commented <br>on your post</h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Wednesday 03:42 PM</span>
                                                    </p>

                                                    <p class="p-2  bg-default-50 text-default-500 mt-2 rounded">
                                                        Amazing! Fast, to the point, professional and really amazing to
                                                        work
                                                        with them!!!
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center gap-2 text-xs text-default-500">
                                                        <div>
                                                            <div class="size-1.5 bg-primary rounded-full"></div>
                                                        </div>15 min
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="flex gap-3 p-4 items-center hover:bg-default-150">
                                            <div class="relative">
                                                <div class="size-10 rounded-md  bg-pink-100">
                                                    <img src="{{ asset('assets/avatar-7-QY-kCwjM.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                                <div class="absolute text-orange-500 bottom-0 -end-0.5 text-base">
                                                    <i data-lucide="heart" class="size-3.5 fill-orange-500"></i>
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full">
                                                <div>
                                                    <h6 class="mb-1 font-medium text-default-800  text-sm">
                                                        <b>@scott</b> liked your post</h6>
                                                    <p class="flex gap-1 items-center text-default-500 text-xs">
                                                        <i data-lucide="clock"
                                                            class="align-middle size-3.5"></i><span>Thursday 06:59
                                                            AM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>1 Week
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Followers -->
                                    <div id="tabsFollowers" class="hidden" role="tabpanel"
                                        aria-labelledby="tabsFollowers-item">
                                        <a href="#" class="flex gap-3 p-4 items-center hover:bg-default-150">
                                            <div>
                                                <div class="size-10 rounded-md  bg-default-100">
                                                    <img src="{{ asset('assets/avatar-3-CuoB696V.png') }}"
                                                        alt="" class="rounded-md">
                                                </div>
                                            </div>

                                            <div class="flex justify-between w-full text-sm">
                                                <div>
                                                    <h6 class="mb-2 font-medium text-default-800">
                                                        <b>@willie_passem</b> followed you</h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Wednesday 03:42 PM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center  gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>4 sec
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Invites -->
                                    <div id="tabsInvites" class="hidden" role="tabpanel"
                                        aria-labelledby="tabsInvites-item">
                                        <a href="#" class="flex gap-3 p-4 items-start hover:bg-default-150">
                                            <div>
                                                <div
                                                    class="size-10 rounded-md  bg-red-100 flex justify-center items-center">
                                                    <i data-lucide="shopping-bag" class="size-5 text-danger"></i>
                                                </div>
                                            </div>

                                            <div class="flex justify-between gap-2 w-full">
                                                <div>
                                                    <h6 class="mb-1 font-medium text-default-800 text-sm">Successfully
                                                        purchased a business plan for
                                                        <span class="text-danger">$199.99</span>
                                                    </h6>
                                                    <p class="flex items-center gap-1 text-default-500 text-xs">
                                                        <i data-lucide="clock" class="align-middle size-3.5"></i>
                                                        <span>Monday 11:26 AM</span>
                                                    </p>
                                                </div>

                                                <div>
                                                    <div class="flex items-center  gap-2 text-xs text-default-500">
                                                        <div class="size-1.5 bg-primary rounded-full"></div>yesterday
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="flex items-center justify-between p-4 border-t border-default-200">
                                    <a href="#!" class="text-sm font-medium text-default-900">Manage
                                        Notification</a>
                                    <button type="button" class="btn btn-sm text-white bg-primary">
                                        View All
                                        <i data-lucide="move-right" class="size-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Setting Offcanvas Button -->
                        <div class="topbar-item">
                            <button class="btn btn-icon size-8 hover:bg-default-150 rounded-full" type="button"
                                aria-haspopup="dialog" aria-expanded="false" aria-controls="theme-customization"
                                data-hs-overlay="#theme-customization">
                                <i data-lucide="settings" class="size-4.5"></i>
                            </button>
                        </div>

                        <!-- Profile Dropdown Button -->
                        <div class="topbar-item hs-dropdown relative inline-flex">
                            <button class="cursor-pointer bg-pink-100 rounded-full" aria-haspopup="menu"
                                aria-expanded="false" aria-label="Dropdown">
                                <img src="{{ asset('assets/avatar-1-DOkfBXSU.png') }}" alt="user-image"
                                    class="hs-dropdown-toggle rounded-full size-9.5">
                            </button>

                            <div class="hs-dropdown-menu min-w-48" role="menu" aria-orientation="vertical"
                                aria-labelledby="hs-dropdown-with-icons">
                                <div class="p-2">
                                    <h6 class="mb-2 text-default-500">Welcome to Tailwick</h6>

                                    <a href="#!" class="flex gap-3">
                                        <div class="relative inline-block">
                                            <div class="rounded bg-default-200">
                                                <img src="{{ asset('assets/avatar-1-DOkfBXSU.png') }}" alt=""
                                                    class="size-12 rounded">
                                            </div>
                                            <span
                                                class="-top-1 -end-1 absolute size-2.5 bg-green-400 border-2 border-white rounded-full"></span>
                                        </div>

                                        <div>
                                            <h6 class="mb-1 text-sm font-semibold text-default-800">Paula Keenan</h6>
                                            <p class="text-default-500">CEO & Founder</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="border-t border-t-default-200 -mx-2 my-2"></div>

                                <div class="flex flex-col gap-y-1">
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="apps-mailbox.html">
                                        <i data-lucide="mail" class="size-4"></i>
                                        Inbox
                                        <span
                                            class="size-4.5 font-semibold bg-danger rounded text-white flex items-center justify-center text-xs">15</span>
                                    </a>

                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="apps-chat.html">
                                        <i data-lucide="messages-square" class="size-4"></i>
                                        Chat
                                    </a>

                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="pages-pricing.html">
                                        <i data-lucide="gem" class="size-4"></i>
                                        Upgrade Pro
                                    </a>

                                    <div class="border-t border-default-200 -mx-2 my-1"></div>

                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="auth-basic-logout.html">
                                        <i data-lucide="log-out" class="size-4"></i>
                                        Cerrar Sesi&oacute;n
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->
            <main>

                <!-- Page Title Start -->
                <div class="flex items-center md:justify-between flex-wrap gap-2 mb-4 print:hidden">
                    <h4 class="text-default-900 text-lg font-semibold">Ecommerce</h4>

                    <div class="md:flex hidden items-center gap-2 text-sm font-semibold">
                        <a href="#" class="text-sm font-medium text-default-700">Tailwick</a>

                        <i
                            class="iconify tabler--chevron-right text-sm flex-shrink-0 text-default-500 rtl:rotate-180"></i>

                        <a href="#" class="text-sm font-medium text-default-700">Dashboards</a>

                        <i
                            class="iconify tabler--chevron-right text-sm flex-shrink-0 text-default-500 rtl:rotate-180"></i>

                        <a href="#" class="text-sm font-medium text-default-700"
                            aria-current="page">Ecommerce</a>
                    </div>
                </div>
                <!-- Page Title End -->
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mb-5">
                    <div class="lg:col-span-2 col-span-1">
                        <div class="card-body relative overflow-hidden bg-zinc-900 rounded-md mb-5">
                            <div class="relative z-10 grid grid-cols-12 items-center">
                                <div class="lg:col-span-8 col-span-12">
                                    <h5 class="mb-3 text-lg text-white">Welcome Paula Keenan 🎉</h5>
                                    <p class="mb-5 text-white/70 text-sm">An ecommerce dashboard has just that
                                        purpose. It provides your ecommerce team with a clear overview of key financial
                                        and website KPIs at any time.</p>
                                    <button type="button" class="btn bg-primary text-white">Take a Product</button>
                                </div>

                                <div class="col-span-4 ms-auto lg:block hidden">
                                    <img src="{{ asset('assets/dashboard-BxFgfF4y.png') }}" alt=""
                                        class="h-40">
                                </div>
                            </div>

                            <div class="absolute inset-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-full" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
                                    preserveAspectRatio="none" viewBox="0 0 1440 560">
                                    <g mask="url(&quot;#SvgjsMask1000&quot;)" fill="none">
                                        <use xlink:href="#SvgjsSymbol1007" x="0" y="0"></use>
                                        <use xlink:href="#SvgjsSymbol1007" x="720" y="0"></use>
                                    </g>
                                    <defs>
                                        <mask id="SvgjsMask1000">
                                            <rect width="1440" height="560" fill="#ffffff"></rect>
                                        </mask>
                                        <path d="M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z" id="SvgjsPath1003"></path>
                                        <path d="M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z" id="SvgjsPath1004"></path>
                                        <path d="M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z" id="SvgjsPath1001"></path>
                                        <path d="M2 -2 L-2 2z" id="SvgjsPath1005"></path>
                                        <path d="M6 -6 L-6 6z" id="SvgjsPath1002"></path>
                                        <path d="M30 -30 L-30 30z" id="SvgjsPath1006"></path>
                                    </defs>
                                    <symbol id="SvgjsSymbol1007">
                                        <use xlink:href="#SvgjsPath1001" x="30" y="30" stroke="rgba(32, 43, 61, 1)">
                                        </use>
                                        <use xlink:href="#SvgjsPath1002" x="30" y="90" stroke="rgba(32, 43, 61, 1)">
                                        </use>
                                        <use xlink:href="#SvgjsPath1001" x="30" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="30" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="30" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="30" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="30" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="30" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="30" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="30" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="30" stroke="rgba(32, 43, 61, 1)">
                                        </use>
                                        <use xlink:href="#SvgjsPath1003" x="90" y="90" stroke="rgba(32, 43, 61, 1)">
                                        </use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1004" x="90" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="90" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="90" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="90" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="150" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="150" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="150" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="150" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="150" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="150" y="330"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1004" x="150" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="150" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="150" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="150" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="210" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="210" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="210" y="150"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1002" x="210" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="210" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="210" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="210" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="210" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="210" y="510"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1003" x="210" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="270" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="270" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="270" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="270" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="270" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="270" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="270" y="390"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1002" x="270" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="270" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="270" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="330" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="330" y="90" stroke="rgba(32, 43, 61, 1)"
                                            stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1002" x="330" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="330" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="330" y="270"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1001" x="330" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="330" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="330" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="330" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="330" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1004" x="390" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="390" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="390" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="390" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="390" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="390" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="390" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="390" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="390" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="390" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1004" x="450" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="450" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="450" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="450" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="450" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="510" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="510" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="510" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="510" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="510" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1004" x="510" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="510" y="390"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1001" x="510" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="510" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="510" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="570" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="570" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="570" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="570" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="570" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="570" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="570" y="390"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1005" x="570" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="570" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="570" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="630" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="630" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="630" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="630" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="630" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="630" y="330"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1002" x="630" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="630" y="450"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1001" x="630" y="510"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="630" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="690" y="30"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="690" y="90"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="690" y="150"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1002" x="690" y="210"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1005" x="690" y="270"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1001" x="690" y="330"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="690" y="390"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1003" x="690" y="450"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                        <use xlink:href="#SvgjsPath1006" x="690" y="510"
                                            stroke="rgba(32, 43, 61, 1)" stroke-width="3"></use>
                                        <use xlink:href="#SvgjsPath1003" x="690" y="570"
                                            stroke="rgba(32, 43, 61, 1)"></use>
                                    </symbol>
                                </svg>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="flex items-center justify-center mx-auto rounded-full size-14 bg-primary/10">
                                        <i data-lucide="wallet-2" class="size-6 text-primary"></i>
                                    </div>
                                    <h5 class="mt-4 text-center mb-2 text-default-800 font-semibold text-lg">$
                                        <span class="counter-value" data-target="236.18">236.18</span>k
                                    </h5>
                                    <p class="text-center text-sm text-default-500">Total Revenue</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="flex items-center justify-center mx-auto rounded-full size-14 bg-secondary/10">
                                        <i data-lucide="package" class="size-6 text-secondary"></i>
                                    </div>
                                    <h5 class="mt-4 text-center mb-2 text-default-800 font-semibold text-lg">
                                        <span class="counter-value" data-target="13461">13461</span>
                                    </h5>
                                    <p class="text-center text-sm text-default-500">Total Orders</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="flex items-center justify-center mx-auto rounded-full size-14 bg-success/10">
                                        <i data-lucide="truck" class="size-6 text-success"></i>
                                    </div>
                                    <h5 class="mt-4 text-center mb-2 text-default-800 font-semibold text-lg">
                                        <span class="counter-value" data-target="17150">17,150</span>
                                    </h5>
                                    <p class="text-center text-sm text-default-500">Delivered</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="flex items-center justify-center mx-auto rounded-full size-14 bg-danger/10">
                                        <i data-lucide="package-x" class="size-6 text-danger"></i>
                                    </div>
                                    <h5 class="mt-4 text-center mb-2 text-default-800 font-semibold text-lg">
                                        <span class="counter-value" data-target="3519">3519</span>
                                    </h5>
                                    <p class="text-center text-sm text-default-500">Cancelled </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Order Statistics</h6>
                                <a href="#"
                                    class="btn btn-sm border-0 text-primary/90 hover:text-primary">View All
                                    <i data-lucide="move-right" class="ms-1 size-4"></i>
                                </a>
                            </div>

                            <div class="card-body">
                                <div id="orderStatisticsChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mb-5">
                    <div class="lg:col-span-2 col-span-1">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title">Sales Revenue Overview</h6>

                                <div class="relative">
                                    <input type="text" data-provider="flatpickr" data-date-format="d M, Y"
                                        data-range-date="true" placeholder="Select Date"
                                        class="form-input form-input-sm ps-9" />
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3">
                                        <i data-lucide="calendar-range" class="size-4 text-default-500"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="grid md:grid-cols-4 grid-cols-1 mb-3 gap-4">
                                    <div class="col-span-1">
                                        <div class="flex items-center gap-3">
                                            <div class="btn size-12 bg-info/10">
                                                <i data-lucide="bar-chart" class="text-info size-6"></i>
                                            </div>

                                            <div>
                                                <p class="mb-1.5 text-default-500 text-sm">Total Sales</p>
                                                <h5 class="text-base font-semibold text-default-800">$<span
                                                        class="counter-value" data-target="1517.36">1,517.36</span>k
                                                </h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-1">
                                        <div class="flex items-center gap-3">
                                            <div class="btn size-12 bg-success/10">
                                                <i data-lucide="trending-up" class="text-success size-6"></i>
                                            </div>

                                            <div>
                                                <p class="mb-1.5 text-default-500 text-sm">Total Profit</p>
                                                <h5 class="text-base font-semibold text-default-800">$<span
                                                        class="counter-value" data-target="746.84">746.84</span>k
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="salesRevenueOverview"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card mb-5">
                            <div class="card-header">
                                <h6 class="card-title">Traffic Resources</h6>
                                <a href="#"
                                    class="btn btn-sm border-0 text-primary/90 hover:text-primary">View Status
                                    <i data-lucide="move-right" class="ms-1 size-4"></i>
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="grid md:grid-cols-12 grid-cols-1">
                                    <div class="rounded-md md:col-span-7 col-span-1">
                                        <div id="trafficResourcesChart" dir="rtl"></div>
                                    </div>

                                    <div class="md:col-span-5 col-span-1">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex items-center gap-2">
                                                <div class="bg-success size-3"
                                                    style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
                                                <p class="text-success">Search Engine (22%)</p>
                                            </div>

                                            <div class="flex items-center gap-2">
                                                <div class="bg-secondary size-3"
                                                    style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
                                                <p class="text-secondary">Referral (34%)</p>
                                            </div>

                                            <div class="flex items-center gap-2">
                                                <div class="bg-info size-3"
                                                    style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
                                                <p class="text-info">Direct (44%)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="text-lg text-default-900 font-semibold">
                                        <span class="counter-value" data-target="1596">1,596</span>
                                    </h5>
                                    <span
                                        class="px-2.5 py-0.5 text-xs rounded border bg-transparent border-danger/50 text-danger flex items-center gap-1">
                                        <i data-lucide="trending-down" class="size-3"></i>
                                        6.8%
                                    </span>
                                </div>

                                <h6 class="font-semibold text-default-900">Monthly Orders Goal (20000+)</h6>

                                <div>
                                    <div class="flex items-center justify-between mt-5 mb-2">
                                        <p class="text-default-500 text-sm">Total Orders</p>
                                        <h6 class="mb-0 text-primary">85%</h6>
                                    </div>
                                    <div class="w-full bg-default-200 rounded-full h-2.54">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Product Orders</h6>

                            <div class="flex gap-3 items-center">
                                <div class="relative">
                                    <input type="email" class="form-input form-input-sm ps-9"
                                        placeholder="Search for....">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3">
                                        <i data-lucide="search" class="size-3.5 text-default-500"></i>
                                    </div>
                                </div>

                                <button class="btn btn-sm bg-primary text-white">
                                    <i data-lucide="download" class="size-3.5 me-1"></i>Export
                                </button>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-default-200 dark:divide-white/14">
                                            <thead class="bg-default-150">
                                                <tr class="text-sm font-normal text-default-500 whitespace-nowrap">
                                                    <th scope="col" class="px-3.5 py-3 text-start">#</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Order ID</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Customer Name
                                                    </th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Location</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Order Date
                                                    </th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Payments</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Quantity</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Price</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Total Amount
                                                    </th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Status</th>
                                                    <th scope="col" class="px-3.5 py-3 text-start">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-default-200 dark:divide-white/14">
                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">01</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100365
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Marie Prohaska
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Germany</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">08 Jun, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Credit Card
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">05</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$146.99</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$749.95</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium bg-success/10 text-success border border-success/30">Delivered</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">02</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100366
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Jaqueline
                                                        Hammes</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">France</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">11 July, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Paypal</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">02</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$450.00</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$900.00</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium bg-info/10 text-info border border-info/30">Shipping</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">03</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100367
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Marlene Hirthe
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Argentina</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">21 Aug, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Visa Card</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">03</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$147.23</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$294.46</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium  bg-secondary/10 text-secondary border border-secondary/30">New</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">04</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100368
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Reagan Larson
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Belgium</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">28 Nov, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">American
                                                        Express</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">01</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$579.12</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$579.12</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium bg-success/10 text-success border border-success/30">Delivered</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">05</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100369
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Glennie
                                                        Langosh</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Australia</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">11 Oct, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">American
                                                        Express</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">01</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$349.00</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$349.00</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium bg-warning/10 text-warning border border-warning/30">Pending</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">06</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100370
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Rickie Cremin
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">United States
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">16 Feb, 2023
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">COD</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">03</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$89.49</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$268.47</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium bg-success/10 text-success border border-success/30">Delivered</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="text-default-800 font-normal">
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">07</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">#TWT5015100371
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Domenic Tromp
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">Afghanistan
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">21 Jan, 2024
                                                    </td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">PayPal</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">02</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$739.79</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap text-sm">$1,479.58</td>
                                                    <td class="px-3.5 py-2.5 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center gap-x-1.5 py-0.5 px-2.5 rounded text-xs font-medium  bg-secondary/10 text-secondary border border-secondary/30">New</span>
                                                    </td>
                                                    <td class="px-3.5 py-2.5">
                                                        <div class="hs-dropdown relative inline-flex">
                                                            <button type="button"
                                                                class="hs-dropdown-toggle btn size-7.5 bg-default-150 hover:bg-default-600 text-default-500 hover:text-white"
                                                                aria-haspopup="menu" aria-expanded="false"
                                                                aria-label="Dropdown"
                                                                hs-dropdown-placement="bottom-end">
                                                                <i class="iconify lucide--ellipsis size-4"></i>
                                                            </button>

                                                            <div class="hs-dropdown-menu" role="menu">
                                                                <div>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="eye" class="size-3"></i>
                                                                        Overview
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="edit" class="size-3"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="flex items-center gap-1.5 py-1.5 font-medium px-3 text-sm text-default-500 hover:bg-default-150 rounded"
                                                                        href="#">
                                                                        <i data-lucide="trash-2" class="size-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <p class="text-default-500 text-sm">Showing <b>07</b> of <b>19</b> Results</p>
                            <nav class="flex items-center gap-2" aria-label="Pagination">
                                <button type="button"
                                    class="btn btn-sm border bg-transparent border-default-200 text-default-600 hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary hover:border-primary/10">
                                    <i data-lucide="chevron-left" class="size-4 me-1"></i> Prev
                                </button>

                                <button type="button"
                                    class="btn size-7.5 bg-transparent border border-default-200 text-default-600 hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary hover:border-primary/10">
                                    1
                                </button>

                                <button type="button" class="btn size-7.5 bg-primary/10 text-primary">
                                    2
                                </button>

                                <button type="button"
                                    class="btn size-7.5 bg-transparent border border-default-200 text-default-600 hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary hover:border-primary/10">
                                    3
                                </button>

                                <button type="button"
                                    class="btn btn-sm border bg-transparent border-default-200 text-default-600 hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary hover:border-primary/10">Next
                                    <i data-lucide="chevron-right" class="size-4 ms-1"></i>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 grid-cols-1 gap-5">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Customer Service</h6>

                            <div class="hs-dropdown relative inline-flex">
                                <button type="button"
                                    class="hs-dropdown-toggle btn size-7.5 text-sm font-semibold rounded-lg hover:bg-default-150"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                    hs-dropdown-placement="bottom-end">
                                    <i class="iconify lucide--ellipsis-vertical size-4 text-default-500"></i>
                                </button>

                                <div class="hs-dropdown-menu" role="menu">
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Weekly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        3 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        6 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        This Yearly
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <p class="text-default-500 text-sm">28% of the Goal Reached ($25k)</p>
                                </div>

                                <div class="w-full h-2 rounded-full bg-default-200">
                                    <div class="h-2 bg-success rounded-full" style="width: 28%"></div>
                                </div>

                                <div class="flex mt-3">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <i data-lucide="calendar-days" class="size-4 text-default-800"></i>
                                        </div>
                                        <p class="mb-0 text-default-600">This Month:
                                            <span class="font-medium text-default-800">$13,741</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h6 class="mt-4 mb-3 text-default-800 text-sm font-semibold">Top Customer</h6>
                                <div class="divide-y divide-default-200 dark:divide-white/14">
                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-3 py-2.25">
                                            <div class="size-8 rounded-full bg-default-100">
                                                <img src="{{ asset('assets/avatar-2-B613dbkY.png') }}"
                                                    alt="" class="size-8 rounded-full">
                                            </div>
                                            <div>
                                                <h6 class="font-medium text-default-800 mb-1">Urrie Arthur</h6>
                                                <p class="text-default-500 font-normal">arthur@tailwick.com</p>
                                            </div>
                                        </div>

                                        <div>
                                            <h6 class="font-semibold text-default-800">$2,452</h6>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-3 py-2.25">
                                            <div class="size-8 rounded-full bg-default-100">
                                                <img src="{{ asset('assets/avatar-3-CuoB696V.png') }}"
                                                    alt="" class="size-8 rounded-full">
                                            </div>
                                            <div>
                                                <h6 class="font-medium text-default-800 mb-1">Natalie Christy</h6>
                                                <p class="text-default-500 font-normal">natalie@tailwick.com</p>
                                            </div>
                                        </div>
                                        <h6 class="font-semibold text-default-800">$1,893</h6>
                                    </div>

                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-3 py-2.25">
                                            <div class="size-8 rounded-full bg-default-100">
                                                <img src="{{ asset('assets/avatar-4-CCRr3MbC.png') }}"
                                                    alt="" class="size-8 rounded-full">
                                            </div>
                                            <div>
                                                <h6 class="font-medium text-default-800 mb-1">Laurie Jackson</h6>
                                                <p class="text-default-500 font-normal">jackson@tailwick.com</p>
                                            </div>
                                        </div>
                                        <h6 class="font-semibold text-default-800">$1,196</h6>
                                    </div>

                                    <div class="flex items-center justify-between text-sm">
                                        <div class="flex items-center gap-3 pt-2">
                                            <div class="size-8 rounded-full bg-default-100">
                                                <img src="{{ asset('assets/avatar-5-ACaGxkSo.png') }}"
                                                    alt="" class="size-8 rounded-full">
                                            </div>
                                            <div>
                                                <h6 class="font-medium text-default-800 mb-1">Michael Torres</h6>
                                                <p class="text-default-500 font-normal">torres@tailwick.com</p>
                                            </div>
                                        </div>
                                        <h6 class="font-semibold text-default-800">$976</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Sales This Month</h6>

                            <div class="hs-dropdown relative inline-flex">
                                <button type="button"
                                    class="hs-dropdown-toggle btn size-7.5 text-sm font-semibold rounded-lg hover:bg-default-150"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                    hs-dropdown-placement="bottom-end">
                                    <i class="iconify lucide--ellipsis-vertical size-4 text-default-500"></i>
                                </button>

                                <div class="hs-dropdown-menu" role="menu">
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Weekly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        3 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        6 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        This Yearly
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center justify-center rounded-md size-12 bg-success/10">
                                    <i data-lucide="trending-up" class="size-6 text-success"></i>
                                </div>
                                <div class="text-sm">
                                    <p class="mb-1 text-default-500">Total Profit</p>
                                    <h5 class="font-semibold text-default-800">$<span class="counter-value"
                                            data-target="746.84">746.84</span>k</h5>
                                </div>
                            </div>

                            <div id="salesThisMonthChart"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Top Selling Products</h6>

                            <div class="hs-dropdown relative inline-flex">
                                <button type="button"
                                    class="hs-dropdown-toggle bt size-7.5 text-sm font-semibold rounded-lg hover:bg-default-150"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                    hs-dropdown-placement="bottom-end">
                                    <i class="iconify lucide--ellipsis-vertical size-4 text-default-500"></i>
                                </button>

                                <div class="hs-dropdown-menu" role="menu">
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Weekly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        3 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        6 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        This Yearly
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="flex flex-col gap-5">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3 whitespace-nowrap">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-02-C91JHf1M.png') }}" alt=""
                                                class="h-6">
                                        </div>

                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 mb-1 text-sm">
                                                Mesh Ergonomic Black Chair</h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800 text-sm">798</h6>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-03-C8EnjP1K.png') }}" alt=""
                                                class="h-6">
                                        </div>
                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 text-sm mb-1">
                                                Fastcolors Typography Men </h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800 text-sm">695</h6>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-04-BzlzTEbH.png') }}" alt=""
                                                class="h-6">
                                        </div>
                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 text-sm mb-1">
                                                Mesh Ergonomic Green Chair </h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800">985</h6>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-05-RFpkKl-c.png') }}" alt=""
                                                class="h-6">
                                        </div>
                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 text-sm mb-1">
                                                Techel Black Bluetooth Soundbar </h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800">813</h6>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-06-joo6Gm4I.png') }}" alt=""
                                                class="h-6">
                                        </div>
                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 text-sm mb-1">
                                                Bovet Fleurier AIFSQ029</h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800"> 915</h6>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex items-center justify-center rounded-md size-10 bg-default-100">
                                            <img src="{{ asset('assets/img-03-C8EnjP1K.png') }}" alt=""
                                                class="h-6">
                                        </div>
                                        <div>
                                            <h6
                                                class="font-semibold text-default-800 md:w-full truncate w-43 text-sm mb-1">
                                                Fastcolors Typography Men</h6>
                                            <div class="flex items-center text-warning gap-0.5">
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star" class="fill-warning size-3.5"></i>
                                                <i data-lucide="star-half" class="fill-warning size-3.5"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-1.5 items-center">
                                        <i data-lucide="shopping-cart" class="size-4 text-default-500"></i>
                                        <h6 class="font-semibold text-default-800"> 785</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">Audience</h6>

                            <div class="hs-dropdown relative inline-flex">
                                <button type="button"
                                    class="hs-dropdown-toggle bt size-7.5 text-sm font-semibold rounded-lg hover:bg-default-150"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown"
                                    hs-dropdown-placement="bottom-end">
                                    <i class="iconify lucide--ellipsis-vertical size-4 text-default-500"></i>
                                </button>

                                <div class="hs-dropdown-menu" role="menu">
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Weekly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        1 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        3 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        6 Monthly
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-1.5 font-medium px-3 text-default-600 hover:bg-default-150 rounded"
                                        href="#">
                                        This Yearly
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div id="audienceChart" class="apex-charts min-h-auto"></div>
                        </div>
                    </div>
                </div>

            </main>

            <!-- Footer Start -->
            <footer class="mt-auto footer flex items-center py-5 border-t border-default-200">
                <div class="lg:px-8 px-6 w-full flex md:justify-between justify-center gap-4">
                    <div>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Tailwick
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="https://themesdesign.in/" target="_blank"
                            class="text-primary">Themesdesign</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
        <!-- End Page content -->
    </div>

    <!-- Theme Settings Offcanvas -->
    <div>
        <div id="theme-customization"
            class="hs-overlay hs-overlay-open:translate-x-0 hidden bg-card dark:bg-default-100 hs-overlay-open:flex flex-col translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0 bottom-0 transition-all duration-300 transform max-w-sm w-full z-80 overflow-hidden">
            <div
                class="min-h-16 flex items-center text-default-600 border-b border-dashed border-default-900/10 px-6 gap-3">
                <h5 class="text-base grow">Theme Settings</h5>

                <button class="btn size-9 rounded-full btn-sm hover:bg-default-150 group" id="fullscreenBtn"
                    data-toggle="fullscreen" aria-label="Full Screen">
                    <i class="iconify lucide--fullscreen size-5 group-[.fullscreen-active]:hidden"></i>
                    <i class="iconify lucide--minimize size-5 hidden group-[.fullscreen-active]:inline-block"></i>
                </button>

                <button type="button" data-hs-overlay="#theme-customization"
                    class="btn size-9 rounded-full btn-sm hover:bg-default-150">
                    <i class="iconify tabler--x text-xl"></i>
                </button>
            </div>

            <div class="h-full flex-grow overflow-y-auto" data-simplebar>
                <div class="divide-y divide-dashed divide-default-200 dark:divide-white/14">
                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-default" value="default">
                                <label class="form-label" for="sidenav-view-default">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="block w-8 bg-default-100">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="h-1 block rounded-sm mb-2.5 bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-default-200">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center justify-end h-full me-1.5">
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Default </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-hover" value="hover">
                                <label class="form-label" for="sidenav-view-hover">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="w-3 bg-default-100">
                                            <span class="size-1.5 mt-1 mx-auto rounded-sm bg-default-300"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-default-200">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center justify-end h-full me-1.5">
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Hover </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-hover-active" value="hover-active">
                                <label class="form-label" for="sidenav-view-hover-active">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="w-8 bg-default-100">
                                            <span class="mt-1.5 mx-1.5 block space-y-1">
                                                <span class="flex mb-2.5 gap-1">
                                                    <span class="h-1 block w-full rounded-sm bg-default-300"></span>
                                                    <span class="h-1 block w-2 rounded-full bg-default-300"></span>
                                                </span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                                <span class="h-1 block rounded-sm bg-default-300"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-default-200">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center justify-end h-full me-1.5">
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Hover Active
                                </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-sm" value="sm">
                                <label class="form-label" for="sidenav-view-sm">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="w-3 bg-default-100">
                                            <span class="size-1.5 mt-1 mx-auto rounded-sm bg-default-300"></span>
                                            <span class="flex flex-col items-center w-full mt-1.5 space-y-1">
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                                <span class="size-1.5 rounded-full bg-default-300"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-default-200">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center h-full me-1.5">
                                                    <span class="grow">
                                                        <span
                                                            class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    </span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Small </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-md" value="md">
                                <label class="form-label" for="sidenav-view-md">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="w-4 bg-default-100">
                                            <span class="size-2 mt-2 mx-auto rounded-sm bg-default-300"></span>
                                            <span class="flex flex-col items-center w-full mt-2 space-y-1">
                                                <span class="size-2 rounded-sm bg-default-300"></span>
                                                <span class="size-2 rounded-sm bg-default-300"></span>
                                                <span class="size-2 rounded-sm bg-default-300"></span>
                                            </span>
                                        </span>
                                        <span class="flex flex-col flex-auto border-s border-default-200">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center h-full me-1.5">
                                                    <span class="grow">
                                                        <span
                                                            class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    </span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ml-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Compact </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-mobile" value="offcanvas">
                                <label class="form-label" for="sidenav-view-mobile">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex items-center h-full me-1.5">
                                                    <span class="size-1.5  ms-1 rounded-sm bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1  rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-auto rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Mobile </div>
                            </div>

                            <div class="card-radio">
                                <input class="hidden" type="radio" name="data-sidenav-size"
                                    id="sidenav-view-hidden" value="hidden">
                                <label class="form-label" for="sidenav-view-hidden">
                                    <span class="flex h-16 overflow-hidden border border-default-200 rounded-md">
                                        <span class="flex flex-col flex-auto">
                                            <span class="h-3 bg-default-100">
                                                <span class="flex flex-auto items-center h-full me-1.5">
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-auto rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                    <span
                                                        class="size-1 block ms-1 rounded-full bg-default-300"></span>
                                                </span>
                                            </span>
                                            <span
                                                class="flex flex-auto border-t border-default-200 bg-default-50"></span>
                                        </span>
                                    </span>
                                </label>
                                <div class="mt-1 text-md font-medium text-center text-default-600"> Hidden </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Theme Mode</h5>
                        <div class="flex gap-2">
                            <div>
                                <input class="hidden" type="radio" name="data-theme" id="layout-color-light"
                                    value="light">
                                <label class="form-label btn bg-default-150" for="layout-color-light">Light</label>
                            </div>

                            <div>
                                <input class="hidden" type="radio" name="data-theme" id="layout-color-dark"
                                    value="dark">
                                <label class="form-label btn bg-default-150" for="layout-color-dark">Dark</label>
                            </div>

                            <div>
                                <input class="hidden" type="radio" name="data-theme" id="layout-color-system"
                                    value="system">
                                <label class="form-label btn bg-default-150"
                                    for="layout-color-system">System</label>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Direction</h5>

                        <div class="flex gap-2">
                            <div>
                                <input class="hidden" type="radio" name="dir" id="direction-ltr"
                                    value="ltr">
                                <label class="form-label btn bg-default-150" for="direction-ltr">LTR Mode</label>
                            </div>

                            <div>
                                <input class="hidden" type="radio" name="dir" id="direction-rtl"
                                    value="rtl">
                                <label class="form-label btn bg-default-150" for="direction-rtl">RTL Mode</label>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <h5 class="font-semibold text-sm mb-3">Sidenav Color</h5>
                        <div class="flex gap-2">
                            <div>
                                <input class="hidden" type="radio" name="data-sidenav-color"
                                    id="menu-color-light" value="light">
                                <label class="form-label btn bg-default-150" for="menu-color-light">Light</label>
                            </div>

                            <div>
                                <input class="hidden" type="radio" name="data-sidenav-color"
                                    id="menu-color-dark" value="dark">
                                <label class="form-label btn bg-default-150" for="menu-color-dark">Dark</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 flex border-t border-dashed border-default-900/10">
                <div class="flex w-full gap-4">
                    <button type="button" class="btn bg-default-150 grow" id="reset-layout">Reset</button>
                    <a href="https://1.envato.market/tailwick-tailwind" target="_blank"
                        class="btn bg-primary text-white grow">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

   <script>
/* ===============================
   LOADER GLOBAL (sin charts)
================================ */
window.resourcesPending = {
    images: 0
};

window.hideLoader = function () {
    window.dispatchEvent(new Event('loader-hide'));
};

window.checkResourcesReady = function () {
    if (window.resourcesPending.images <= 0) {
        window.hideLoader();
    }
};

window.trackImages = function () {
    const images = Array.from(document.images)
        .filter(img => img.offsetParent !== null);

    window.resourcesPending.images = images.length;

    if (images.length === 0) {
        window.checkResourcesReady();
        return;
    }

    images.forEach(img => {
        if (img.complete) {
            window.resourcesPending.images--;
            window.checkResourcesReady();
        } else {
            img.addEventListener('load', () => {
                window.resourcesPending.images--;
                window.checkResourcesReady();
            });
            img.addEventListener('error', () => {
                window.resourcesPending.images--;
                window.checkResourcesReady();
            });
        }
    });
};

document.addEventListener('DOMContentLoaded', () => {
    window.trackImages();
});
</script>



</body>

</html>