@extends('layout')
@section('styles')
    <script type="module" crossorigin src="{{ asset('assets/pages-account-settings-CzPgmgwW.js') }}"></script>
    <link rel="modulepreload" crossorigin href="{{ asset('assets/form-choices-CeuTJViI.js') }}">
@endsection
@section('content')
    <!-- Page Title Start -->
    <div class="flex items-center md:justify-between flex-wrap gap-2 mb-4 print:hidden">
        <h4 class="text-default-900 text-lg font-semibold">Configuraci&oacute;n de la cuenta</h4>

        <div class="hidden md:flex items-center gap-2 text-sm font-semibold">
            <a href="#" class="text-sm font-medium text-default-700">Tailwick</a>

            <i class="iconify tabler--chevron-right text-sm flex-shrink-0 text-default-500 rtl:rotate-180"></i>

            <a href="#" class="text-sm font-medium text-default-700">Menu</a>

            <i class="iconify tabler--chevron-right text-sm flex-shrink-0 text-default-500 rtl:rotate-180"></i>

            <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Account Settings</a>
        </div>
    </div>
    <!-- Page Title End -->
    <div class="container-fluid">
        <div class="mb-5">
            <div class="card !rounded-none">
                <div class="card-body !px-2.5">
                    <div class="grid lg:grid-cols-12 grid-cols-1 gap-6 items-start">

                        <div class="lg:col-span-2 col-span-1 flex justify-center lg:justify-start">
                            <div
                                class="relative inline-block rounded-full shadow-md size-20 bg-default-100 dark:bg-default-200 profile-user xl:size-28">
                                <img src="assets/logo/logo_pdf.png" alt=""
                                    class="object-cover border-0 rounded-full img-thumbnail user-profile-image w-full h-full">
                                <div
                                    class="absolute bottom-0 flex items-center justify-center rounded-full size-8 end-0 profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                                    <label for="profile-img-file-input"
                                        class="flex items-center justify-center bg-white dark:bg-zinc-800 rounded-full shadow-lg cursor-pointer size-8 profile-photo-edit border border-default-200">
                                        <i data-lucide="image-plus"
                                            class="size-4 text-slate-500 dark:text-zinc-200 fill-slate-100 dark:fill-zinc-500"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-8 col-span-1">
                            <h5 class="text-xl font-semibold mb-1 flex items-center gap-1">
                                Mytems E.I.R.L.
                                <i data-lucide="badge-check" class="size-5 text-info fill-info/10"></i>
                            </h5>

                            <div class="flex flex-wrap gap-4 mb-4">
                                <p class="text-default-500 flex gap-1 items-center text-sm">
                                    <i data-lucide="user-circle" class="fill-default-100 size-4"></i>
                                    CEO &amp; Fundador
                                </p>

                                <p class="text-default-500 flex gap-1 items-center text-sm">
                                    <i data-lucide="map-pin" class="fill-default-100 size-4"></i>
                                    Lamas, Per&uacute;
                                </p>
                            </div>

                            <p class="mt-4 text-default-500 leading-relaxed">
                                Mytems es una plataforma tecnol&oacute;gica enfocada en simplificar la gesti&oacute;n de
                                negocios. Desarrollamos sistemas modernos de facturaci&oacute;n, ventas y control
                                administrativo, pensados para emprendedores y empresas que buscan crecer de forma ordenada y
                                eficiente.
                            </p>
                        </div>

                        <div class="lg:col-span-2 col-span-1">
                            <div class="flex lg:justify-end">
                                <button type="button"
                                    class="btn bg-default-500 text-white w-full lg:w-auto px-4 py-2 rounded shadow-sm hover:bg-default-600 transition-all">
                                    Generar Json
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="!px-2.5">
                    <div>
                        <nav class="flex gap-1 flex-wrap" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-2 px-4 inline-flex items-center gap-2 border-b border-transparent text-sm whitespace-nowrap text-default-500 hover:text-primary focus:outline-hidden focus:text-primary disabled:opacity-50 disabled:pointer-events-none active"
                                id="personalTabs" aria-selected="true" data-hs-tab="#personal" aria-controls="personal"
                                role="tab">
                                Datos de la Empresa
                            </button>

                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-2 px-4 inline-flex items-center gap-2 border-b border-transparent text-sm whitespace-nowrap text-default-500 hover:text-primary focus:outline-hidden focus:text-primary disabled:opacity-50 disabled:pointer-events-none"
                                id="privacyPolicyTabs" aria-selected="false" data-hs-tab="#privacyPolicy"
                                aria-controls="privacyPolicy" role="tab">
                                Usuario SUNAT
                            </button>
                        </nav>
                    </div>

                </div>
            </div>
        </div>

        <div id="personal" role="tabpanel" aria-labelledby="personalTabs">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-1 text-[15px]">Datos de la Empresa</h6>
                    <p class="mb-4 text-default-500">Actualiza la información legal y de ubicación de tu empresa aquí.</p>

                    <form id="form-info" class="form-vertical">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">

                            <div class="lg:col-span-6 col-span-1">
                                <label for="ruc" class="inline-block mb-2 font-medium">RUC</label>
                                <input type="text" id="ruc" name="ruc" class="form-input"
                                    value="{{ $business->ruc }}" placeholder="Ingrese el RUC">
                            </div>

                            <div class="lg:col-span-6 col-span-1">
                                <label for="razon_social" class="inline-block mb-2 font-medium">Razón Social</label>
                                <input type="text" id="razon_social" name="razon_social"
                                    class="form-input text-uppercase" value="{{ $business->razon_social }}"
                                    placeholder="Ingrese la razón social">
                            </div>

                            <div class="lg:col-span-6 col-span-1">
                                <label for="direccion" class="inline-block mb-2 font-medium">Dirección</label>
                                <input type="text" id="direccion" name="direccion" class="form-input text-uppercase"
                                    value="{{ $business->direccion }}" placeholder="Ingrese la dirección">
                            </div>

                            <div class="lg:col-span-6 col-span-1">
                                <label for="pais" class="inline-block mb-2 font-medium">País</label>
                                <select name="pais" id="pais" class="form-input" disabled>
                                    <option value="PE">Perú</option>
                                </select>
                            </div>

                            <div class="lg:col-span-4 col-span-1">
                                <label for="departamento" class="inline-block mb-2 font-medium">Departamento</label>
                                <select name="departamento" id="departamento" class="form-input select2_department"
                                    style="width: 100%"></select>
                            </div>

                            <div id="wrapper_province" class="lg:col-span-4 col-span-1">
                                <label for="provincia" class="inline-block mb-2 font-medium">Provincia</label>
                                <select name="provincia" id="provincia" class="form-input select2_province"></select>
                            </div>

                            <div id="wrapper_district" class="lg:col-span-4 col-span-1">
                                <label for="distrito" class="inline-block mb-2 font-medium">Distrito</label>
                                <select name="distrito" id="distrito" class="form-input select2_district"></select>
                            </div>

                            <div class="lg:col-span-12 col-span-1">
                                <label for="url_api" class="inline-block mb-2 font-medium">URL Api</label>
                                <input type="text" id="url_api" name="url_api" class="form-input"
                                    value="{{ $business->url_api }}" placeholder="Ingrese la URL de la API">
                            </div>

                        </div>
                        <div class="flex justify-end mt-6 gap-4">
                            <button type="button" class="btn bg-success text-white btn-save-info flex items-center">
                                <span class="text-save-info">Guardar cambios</span>
                                <span class="spinner-grow spinner-grow-sm me-1 hidden text-saving-info" role="status"
                                    aria-hidden="true"></span>
                                <span class="text-saving-info hidden ml-2">Guardando...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="privacyPolicy" class="hidden" role="tabpanel" aria-labelledby="privacyPolicyTabs">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-[15px]">Security & Privacy</h6>
                    <div class="space-y-6">
                        <div class="flex flex-col justify-between gap-2 md:flex-row">
                            <div>
                                <h4 class="text-[15px]">Two-factor Authentication</h4>
                                <p class="mt-1 text-default-500">Two-factor authentication is an enhanced security. Once
                                    enabled, you'll be required to give two types of identification when you log into Google
                                    Authentication and SMS are Supported.</p>
                            </div>

                            <div class="shrink-0">
                                <button type="button" class="btn btn-sm bg-primary text-white !py-1 !px-1.5">Enable
                                    Two-factor Authentication</button>
                            </div>
                        </div>

                        <div class="flex flex-col justify-between gap-2 md:flex-row">
                            <div>
                                <h4 class="text-[15px]">Secondary Verification</h4>
                                <p class="mt-1 text-default-500">The first factor is a password and the second commonly
                                    includes a text with a code sent to your smartphone, or biometrics using your
                                    fingerprint, face, or retina.</p>
                            </div>

                            <div class="shrink-0">
                                <button type="button" class="btn btn-sm bg-primary text-white !py-1 !px-1.5">Set up
                                    secondary method</button>
                            </div>
                        </div>

                        <div class="flex flex-col justify-between gap-2 md:flex-row">
                            <div>
                                <h4 class="text-[15px]">Backup Codes</h4>
                                <p class="mt-1 text-default-500">A backup code is automatically generated for you when you
                                    turn on two-factor authentication through your iOS or Android Twitter app. You can also
                                    generate a backup code on twitter.com.</p>
                            </div>

                            <div class="shrink-0">
                                <button type="button" class="btn btn-sm bg-primary text-white !py-1 !px-1.5">Generate
                                    backup codes</button>
                            </div>
                        </div>
                    </div>

                    <h6 class="inline-block mt-6 mb-4 underline text-[15px]">Application Notifications:</h6>
                    <div class="space-y-6">
                        <div class="flex justify-between gap-2">
                            <div>
                                <h4 class="text-[15px]">Direct messages</h4>
                                <p class="mt-1 text-default-500">Messages from people you follow</p>
                            </div>

                            <div class="shrink-0">
                                <div class="relative inline-block w-10">
                                    <input type="checkbox" name="directMessage" id="directMessage" class="form-switch"
                                        checked="">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <div>
                                <h4 class="text-[15px]">Show email notifications</h4>
                                <p class="mt-1 text-default-500">Under Settings, choose Notifications. Under Select an
                                    account, choose the account to enable notifications for.</p>
                            </div>

                            <div class="shrink-0">
                                <div class="relative inline-block w-10">
                                    <input type="checkbox" name="emailNotification" id="emailNotification"
                                        class="form-switch" checked="">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <div>
                                <h4 class="text-[15px]">Show chat notifications</h4>
                                <p class="mt-1 text-default-500">Messages from people you follow</p>
                            </div>

                            <div class="shrink-0">
                                <div class="relative inline-block w-10">
                                    <input type="checkbox" name="chatNotification" id="chatNotification"
                                        class="form-switch" checked="">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between gap-2">
                            <div>
                                <h4 class="text-[15px]">Show purchase notifications</h4>
                                <p class="mt-1 text-default-500">Get real-time purchase alerts to protect yourself from
                                    fraudulent charges.</p>
                            </div>

                            <div class="shrink-0">
                                <div class="relative inline-block w-10">
                                    <input type="checkbox" name="showPurchase" id="showPurchase" class="form-switch"
                                        checked="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="inline-block mt-6 mb-4 underline text-[15px]">Delete This Account:</h6>
                    <p class="mt-1 text-default-500">Go to the Data & Privacy section of your profile Account. Scroll to
                        "Your data & privacy options." Delete your Profile Account. Follow the instructions to delete your
                        account :</p>
                    <form action="">
                        <div class="max-w-xs mt-4">
                            <div>
                                <input type="password" class="form-input" id="oldpasswordInput"
                                    placeholder="Enter password">
                            </div>

                            <div class="flex mt-4 gap-2 flex-wrap">
                                <button type="button"
                                    class="btn bg-danger/10 text-danger hover:bg-danger hover:text-white">Close & delete
                                    this Account</button>
                                <button type="button" class="btn bg-default-100">Cancel</button>
                            </div>
                        </div><!--end col-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('business.js')
@endsection