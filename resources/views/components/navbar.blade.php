<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-transparent w-full flex items-center shadow-md  h-24">
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                  <img src="img/logo.png" alt="logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden">
                  <img src="img/logo.png" alt="logo" class="w-[48px] lg:w-[64px] hidden dark:inline-block">
                  <span class=" logo-span text-xl xl:text-2xl font-bold pl-5 pt-3">Klinikadlamaszyn</span>
                </a>
              </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <button
                        id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg" @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'">
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                        <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
                    </button>
                    <nav
                        style="background-color: #f8f8fc"
                        :class="!navbarOpen && 'hidden'"
                        id="navbarCollapse"
                        class="absolute right-0 top-full  py-5 px-6 z-50 shadow rounded-lg w-full  dark:text-black-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            <li>
                                <a href="#about" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    Strona główna
                                </a>
                            </li>
                            <li>
                                <a href="#portfolio" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    Zgłoszenie naprawy
                                </a>
                            </li>
                            <li>
                                <a href="#experience" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    Galeria
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    Kontakt
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    Prywatność
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="nav-link text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-gray-200 lg:inline-flex lg:ml-6 xl:ml-12">
                                    O nas
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
