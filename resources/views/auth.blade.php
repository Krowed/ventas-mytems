<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Auth - Mytems</title>
  <link rel="icon" href="favicon.ico"><link href="assets/style_login.css" rel="stylesheet"><script data-cfasync="false" nonce="815e7e62-abe5-4061-8533-aeab00dd5d44">try{(function(w,d){!function(j,k,l,m){if(j.zaraz)console.error("zaraz is loaded twice");else{j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz._v="5874";j.zaraz._n="815e7e62-abe5-4061-8533-aeab00dd5d44";j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const t of Object.entries(Object.entries(dataLayer).reduce((u,v)=>({...u[1],...v[1]}),{})))zaraz.set(t[0],t[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const w=j.zaraz.q.shift();j[l].q.push(w)}r.defer=!0;for(const x of[localStorage,sessionStorage])Object.keys(x||{}).filter(z=>z.startsWith("_zaraz_")).forEach(y=>{try{j[l]["z_"+y.slice(7)]=JSON.parse(x.getItem(y))}catch{j[l]["z_"+y.slice(7)]=x.getItem(y)}});r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async d$=>new Promise(ea=>{if(d$){d$.e&&d$.e.forEach(eb=>{try{const ec=d.querySelector("script[nonce]"),ed=ec?.nonce||ec?.getAttribute("nonce"),ee=d.createElement("script");ed&&(ee.nonce=ed);ee.innerHTML=eb;ee.onload=()=>{d.head.removeChild(ee)};d.head.appendChild(ee)}catch(ef){console.error(`Error executing script: ${eb}\n`,ef)}});Promise.allSettled((d$.f||[]).map(eg=>fetch(eg[0],eg[1])))}ea()});zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>

  <script src="https://unpkg.com/alpinejs" defer></script>

  <body
    x-data="{ page: 'comingSoon', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
  >


<div
    id="ID-load"
    x-show="loaded"
    x-transition.opacity.duration.300ms
    class="ID-load fixed left-0 top-0 w-full h-screen bg-white dark:bg-black z-[999999]"
    x-init="
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => loaded = false, 500)
        })
    "
>
    <div>
        <div class="text-muted">
            Cargando mytems...
        </div>

        <div class="id-load-content">

            <!-- SHOP -->
            <div class="id-load-icon id-shop">
                <svg viewBox="0 0 576 512">
                    <path d="M490.3 13.1l57.3 90.7c29.7 46.9 3.4 112-52.1 119.4c-4 .5-7.9 .8-12.1 .8c-26.1 0-49.2-11.4-65.2-29c-15.9 17.6-39 29-65.2 29s-49.3-11.4-65.2-29c-15.9 17.6-39 29-65.2 29s-49.3-11.4-65.2-29c-15.9 17.6-39.1 29-65.2 29c-4.1 0-8.2-.3-12.1-.8c-55.3-7.4-81.5-72.6-51.9-119.4L85.7 13.1C90.8 5 99.9 0 109.6 0H466.4c9.7 0 18.8 5 23.9 13.1z"/>
                    <path d="M64 219.1V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V219.1c-5.1 2-10.6 3.4-16.5 4.1c-4 .5-7.9 .8-12.1 .8c-12.7 0-24.6-2.7-35.4-7.5V384H128V216.5c-10.8 4.8-22.9 7.5-35.6 7.5c-4.1 0-8.2-.3-12.1-.8c-5.7-.8-11.2-2.2-16.2-4.1z"/>
                </svg>
            </div>

            <!-- CART -->
            <div class="id-load-icon id-cart">
                <svg viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 14.3 47.9 35.4L128 64H551.3c17.7 0 32 14.3 32 32c0 2.6-.3 5.1-.9 7.6l-41 152.3c-8.5 31.4-37 53.1-69.5 53.1H192c-32.5 0-61.1-21.7-69.5-53.1L71.8 64H24C10.7 64 0 53.3 0 40V24z"/>
                    <path d="M170.7 416a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zm288 0a48 48 0 1 1 -96 0 48 48 0 1 1 96 0z"/>
                </svg>
            </div>

            <!-- REGISTER -->
            <div class="id-load-icon id-register">
                <svg viewBox="0 0 512 512">
                    <path d="M0 448V128C0 92.7 28.7 64 64 64H384c35.3 0 64 28.7 64 64V256h32c17.7 0 32 14.3 32 32v160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32z"/>
                    <path d="M160 96h64v64H160V96zm96 64h64V96H256v64z"/>
                </svg>
            </div>

            <!-- REPORT -->
            <div class="id-load-icon id-report">
                <svg viewBox="0 0 512 512">
                    <path d="M505 44.2c9.4 9.4 9.4 24.6 0 33.9L174.1 408.9c-9.1 9.1-21.5 14.1-34.6 14.1H48c-26.5 0-48-21.5-48-48v-91.5c0-13.1 5-25.6 14.1-34.7L324 7c9.4-9.4 24.6-9.4 33.9 0L505 44.2z"/>
                </svg>
            </div>

            <!-- SALE -->
            <div class="id-load-icon id-sale">
                <svg viewBox="0 0 512 512">
                    <path d="M477.6 19.1C462.9 7 443.1 0 422.6 0H144.5C124 0 104.2 7 89.6 19.1L4.4 87.2C1.6 89.5 0 92.5 0 95.7V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V95.7c0-3.2-1.6-6.2-4.4-8.5l-85.2-68.1z"/>
                    <path d="M144 288a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm176 0a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/>
                </svg>
            </div>

            <!-- INVENTORY -->
            <div class="id-load-icon id-invetory">
                <svg viewBox="0 0 640 512">
                    <path d="M176 48h288l40 80H136l40-80zM32 128H608c17.7 0 32 14.3 32 32V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V160c0-17.7 14.3-32 32-32z"/>
                </svg>
            </div>

        </div>
    </div>
</div>




    <div class="relative z-1 bg-white p-6 sm:p-0 dark:bg-gray-900">
      <div
        class="relative flex h-screen w-full flex-col justify-center sm:p-0 lg:flex-row dark:bg-gray-900"
      >
        <div class="flex w-full flex-1 flex-col lg:w-1/2">
          
          <div
            class="mx-auto flex w-full max-w-md flex-1 flex-col justify-center"
          >
            <div>
              <div class="sm:mb-4">
                <h5
                  class="text-title-sm mb-2 font-semibold text-gray-800 dark:text-white/90 text-center"
                >
                  Bienvenido a Mytems EIRL &#x1F44B;
                </h5>
                <p class="text-sm text-gray-500 dark:text-gray-400 text-center">
                  Sistema de Facturaci&oacute;n Electr&oacute;nica para Emprendedores
                </p>
              </div>
              <div>
                <div class="relative py-3 sm:py-5">
                  <div class="absolute inset-0 flex items-center">
                    <div
                      class="w-full border-t border-gray-200 dark:border-gray-800"
                    ></div>
                  </div>
                  <div class="relative flex justify-center text-sm">
                    <span
                      class="bg-white p-2 text-gray-400 sm:px-5 sm:py-2 dark:bg-gray-900"
                      >Ingresa a tu cuenta</span
                    >
                  </div>
                </div>
                
                <form>
                  <div class="space-y-5">
                    <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Email<span class="text-error-500">*</span>
                      </label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="info@gmail.com"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                      />
                    </div>
                    <!-- Password -->
                    <div>
                      <label
                        class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400"
                      >
                        Password<span class="text-error-500">*</span>
                      </label>
                      <div x-data="{ showPassword: false }" class="relative">
                        <input
                          :type="showPassword ? 'text' : 'password'"
                          placeholder="Enter your password"
                          class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pr-11 pl-4 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30"
                        />
                        <span
                          @click="showPassword = !showPassword"
                          class="absolute top-1/2 right-4 z-30 -translate-y-1/2 cursor-pointer text-gray-500 dark:text-gray-400"
                        >
                          <svg
                            x-show="!showPassword"
                            class="fill-current"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M10.0002 13.8619C7.23361 13.8619 4.86803 12.1372 3.92328 9.70241C4.86804 7.26761 7.23361 5.54297 10.0002 5.54297C12.7667 5.54297 15.1323 7.26762 16.0771 9.70243C15.1323 12.1372 12.7667 13.8619 10.0002 13.8619ZM10.0002 4.04297C6.48191 4.04297 3.49489 6.30917 2.4155 9.4593C2.3615 9.61687 2.3615 9.78794 2.41549 9.94552C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C13.5184 15.3619 16.5055 13.0957 17.5849 9.94555C17.6389 9.78797 17.6389 9.6169 17.5849 9.45932C16.5055 6.30919 13.5184 4.04297 10.0002 4.04297ZM9.99151 7.84413C8.96527 7.84413 8.13333 8.67606 8.13333 9.70231C8.13333 10.7286 8.96527 11.5605 9.99151 11.5605H10.0064C11.0326 11.5605 11.8646 10.7286 11.8646 9.70231C11.8646 8.67606 11.0326 7.84413 10.0064 7.84413H9.99151Z"
                              fill="#98A2B3"
                            />
                          </svg>
                          <svg
                            x-show="showPassword"
                            class="fill-current"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M4.63803 3.57709C4.34513 3.2842 3.87026 3.2842 3.57737 3.57709C3.28447 3.86999 3.28447 4.34486 3.57737 4.63775L4.85323 5.91362C3.74609 6.84199 2.89363 8.06395 2.4155 9.45936C2.3615 9.61694 2.3615 9.78801 2.41549 9.94558C3.49488 13.0957 6.48191 15.3619 10.0002 15.3619C11.255 15.3619 12.4422 15.0737 13.4994 14.5598L15.3625 16.4229C15.6554 16.7158 16.1302 16.7158 16.4231 16.4229C16.716 16.13 16.716 15.6551 16.4231 15.3622L4.63803 3.57709ZM12.3608 13.4212L10.4475 11.5079C10.3061 11.5423 10.1584 11.5606 10.0064 11.5606H9.99151C8.96527 11.5606 8.13333 10.7286 8.13333 9.70237C8.13333 9.5461 8.15262 9.39434 8.18895 9.24933L5.91885 6.97923C5.03505 7.69015 4.34057 8.62704 3.92328 9.70247C4.86803 12.1373 7.23361 13.8619 10.0002 13.8619C10.8326 13.8619 11.6287 13.7058 12.3608 13.4212ZM16.0771 9.70249C15.7843 10.4569 15.3552 11.1432 14.8199 11.7311L15.8813 12.7925C16.6329 11.9813 17.2187 11.0143 17.5849 9.94561C17.6389 9.78803 17.6389 9.61696 17.5849 9.45938C16.5055 6.30925 13.5184 4.04303 10.0002 4.04303C9.13525 4.04303 8.30244 4.17999 7.52218 4.43338L8.75139 5.66259C9.1556 5.58413 9.57311 5.54303 10.0002 5.54303C12.7667 5.54303 15.1323 7.26768 16.0771 9.70249Z"
                              fill="#98A2B3"
                            />
                          </svg>
                        </span>
                      </div>
                    </div>
                    <!-- Checkbox -->
                    <div class="flex items-center justify-between">
                      <div x-data="{ checkboxToggle: false }">
                        <label
                          for="checkboxLabelOne"
                          class="flex cursor-pointer items-center text-sm font-normal text-gray-700 select-none dark:text-gray-400"
                        >
                          <div class="relative">
                            <input
                              type="checkbox"
                              id="checkboxLabelOne"
                              class="sr-only"
                              @change="checkboxToggle = !checkboxToggle"
                            />
                            <div
                              :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'"
                              class="mr-3 flex h-5 w-5 items-center justify-center rounded-md border-[1.25px]"
                            >
                              <span :class="checkboxToggle ? '' : 'opacity-0'">
                                <svg
                                  width="14"
                                  height="14"
                                  viewBox="0 0 14 14"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M11.6666 3.5L5.24992 9.91667L2.33325 7"
                                    stroke="white"
                                    stroke-width="1.94437"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </div>
                          Recordar sesio&oacute;n
                        </label>
                      </div>
                      <a
                        href="/reset-password.html"
                        class="text-brand-500 hover:text-brand-600 dark:text-brand-400 text-sm"
                        >Forgot password?</a
                      >
                    </div>
                    <!-- Button -->
                    <div>
                      <button
                        class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 flex w-full items-center justify-center rounded-lg px-4 py-3 text-sm font-medium text-white transition"
                      >
                        Sign In
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div
          class="bg-brand-950 relative hidden h-full w-full items-center lg:grid lg:w-1/2 dark:bg-white/5"
        >
          <div class="z-1 flex items-center justify-center">
            <!-- ===== Common Grid Shape Start ===== -->
            <div class="absolute right-0 top-0 -z-1 w-full max-w-[250px] xl:max-w-[450px]">
  <img src="assets/grid-01.svg" alt="grid" />
</div>
<div
  class="absolute bottom-0 left-0 -z-1 w-full max-w-[250px] rotate-180 xl:max-w-[450px]"
>
  <img src="assets/grid-01.svg" alt="grid" />
</div>

            <div class="flex max-w-xs flex-col items-center">
              <a href="index.html" class="mb-4 block">
                <img src="assets/auth-logo.svg" alt="Logo" />
              </a>
              <p class="text-center text-gray-400 dark:text-white/60">
                Gesti&oacute;n r&aacute;pida, simple y segura de tus comprobantes digitales
              </p>
            </div>
          </div>
        </div>
        <!-- Toggler -->
        
      </div>
    </div>
    <!-- ===== Page Wrapper End ===== -->
  <script defer src="assets/bundle.js"></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"67f7a278e3374824ae6dd92295d38f77","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
