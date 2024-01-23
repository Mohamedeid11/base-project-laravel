<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

            <div class="menu-item">
                <div class="menu-content pb-2">
                    <a href="{{ route('admin.index') }}"><span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span></a>
                </div>
            </div>

            @adminCan('admins.read')
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ showLink('admin.admin') }} {{ showLink('admin.role') }}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-users"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Administrator</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link {{ activeLink('admin.admin') }}" href="{{ route('admin.admin.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Admins</span>
                        </a>
                    </div>
                    @adminCan('roles.read')
                    <div class="menu-item">
                        <a class="menu-link {{ activeLink('admin.role') }}" href="{{ route('admin.role.index')}}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                    </div>
                    @endadminCan
                </div>
            </div>
            @endadminCan
{{--

            @adminCan('users.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Users') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.user') }}" href="{{ route('admin.user.index')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-users"></i>
                                --}}
{{-- <i class="fas fa-feather"></i> --}}{{--

                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> Users </span>
                    </a>
                </div>
            </div>
            @endadminCan
--}}
{{--

            @adminCan('contact.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Contact') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.contact') }}" href="{{ route('admin.contact.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-building"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> Contact </span>
                    </a>
                </div>
            </div>
            @endadminCan
--}}
{{--

            @adminCan('push_notification.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Push Notification') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <div class="menu-item">
                    <a class="menu-link  {{ activeLink('admin.push_notification') }}" href="{{ route('admin.push_notification.index') }}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <i class="fas fa-building"></i>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        <span class="menu-title"> Push Notification </span>
                    </a>
                </div>
            </div>
            @endadminCan
--}}
{{--

            @adminCan('setting.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Site Setting') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion
                            {{ showLink('admin.setting') }}
                            {{ showLink('admin.social') }}">

                <span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-wrench"></i>
                        </span>
                    </span>
                    <span class="menu-title">Settings</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                        <a class="menu-link {{ activeSingleLink('admin.setting.form.home') }}" href="{{ route('admin.setting.form.home') }}">
                            <span class="menu-bullet">

                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </span>
                            <span class="menu-title">Home Setting</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{ activeSingleLink('admin.setting.form.social') }}" href="{{ route('admin.setting.form.social') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Social Setting</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" target="_blank" href="{{ url('translations/view/mobileValidation') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Mobile App Transaltion</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" target="_blank" href="{{ url('translations/view/site') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Site Transaltion</span>
                        </a>
                    </div>

                </div>
            </div>
            @endadminCan
--}}
{{--

            @adminCan('cities.read')
            <div class="menu-item">
                <div class="menu-content pb-2">
                    <a href="#\"><span class="menu-section text-muted text-uppercase fs-8 ls-1">Cities</span></a>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion
                            {{ showLink('admin.city') }}
                            {{ showLink('admin.district') }}
                            ">
                <span class="menu-link">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-building"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">cities</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @adminCan('cities.read')
                    <div class="menu-item">
                        <a class="menu-link {{ activeLink('admin.city') }}" href="{{ route('admin.city.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">City</span>
                        </a>
                    </div>
                    @endadminCan

                    @adminCan('districts.read')
                    <div class="menu-item">
                        <a class="menu-link {{ activeLink('admin.district') }}" href="{{ route('admin.district.index') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Districts</span>
                        </a>
                    </div>
                    @endadminCan
                </div>
            </div>
            @endadminCan
--}}
{{--

            @adminCan('pages.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Page') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.pages') }}" href="{{ route('admin.pages.index','about-us') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-building"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> About Us </span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.pages') }}" href="{{ route('admin.pages.index','terms-and-conditions') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-building"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> Terms And Conditions </span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.pages') }}" href="{{ route('admin.pages.index','privacy-policy') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-building"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> Privacy Policy </span>
                    </a>
                </div>

            </div>
            @endadminCan
--}}
{{--

            @adminCan('sliders.read')
            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ __('Slider') }}</span>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <div class="menu-item">
                    <a class="menu-link {{ activeLink('admin.slider') }}" href="{{ route('admin.slider.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fas fa-building"></i>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title"> Slider </span>
                    </a>
                </div>
            </div>
            @endadminCan
--}}


        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
