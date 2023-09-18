<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if (config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if (config('adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>

                {{-- Configured sidebar links --}}
                {{-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">
                        <i class="fas fa-fw fa-tachometer-alt "></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-hospital-user  "></i>
                            <p>
                                Patients
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('patients/create') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Create Patient
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('patients') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Patients List
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcanany

                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-hospital-user  "></i>
                            <p>
                                Therapists
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('therapists/create') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Create Therapist
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('therapists') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Therapists List
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcanany
                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-ticket-alt  "></i>
                            <p>
                                Tickets
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('tickets/create') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Create Ticket
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('tickets') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Ticket List
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('missing-info-tickets') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Missing Info Tickets
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('cancelled-tickets') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Cancelled Ticket
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcanany

                @canany(['show-screener-list', 'show-pib-list', 'show-pit-list', 'show-yes-approval-list',
                    'show-no-approval-list', 'show-heralmelding-list', 'show-vtcb-list', 'show-patient-list'])

                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-hospital-user  "></i>
                            <p>
                                Ticket Groups
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @can('show-screener-list')
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Screener Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('screening') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    Screener Ticket List
                                                </p>
                                            </a>
                                        </li>

                                    </ul>

                                </li>
                            @endcan


                            @canany(['show-pib-list', 'update-pib', 'delete-pib'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            PiB Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('pib') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    PiB Ticket List

                                                </p>
                                            </a>
                                        </li>

                                    </ul>

                                </li>
                            @endcanany

                            @canany(['show-pit-list', 'update-pit', 'delete-pit'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            PiT Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('pit') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    PiT Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany


                            @canany(['show-yes-approval-list', 'update-yes-approval', 'delete-yes-approval'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Yes Approval Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('yes-approvals') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    Yes Approval Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany
                            @canany(['show-no-approval-list', 'update-no-approval', 'delete-no-approval'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            No Approval Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('no-approvals') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    No Approval Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany
                            @canany(['show-heralmelding-list', 'update-heralmelding', 'delete-heralmelding'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Heranmelding Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('heranmelding') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    Heranmelding Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany
                            @canany(['show-vtcb-list', 'update-vtcb', 'delete-vtcb'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            VTCB Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('vtcbs') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    VTCB Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany

                            @canany(['show-pit-list', 'update-pit', 'delete-pit'])
                                <li class="nav-item has-treeview">
                                    <a class="nav-link" href="">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Appointment Group
                                            <i class="fas fa-angle-left right "></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('appointment-groups') }}">
                                                <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                                <p>
                                                    Appointment Ticket List

                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcanany

                        </ul>


                    </li>
                @endcanany

                @canany(['show-patient-list', 'add-new-patient', 'update-patient-info', 'delete-patient-info'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-ticket-alt  "></i>
                            <p>
                                Appointmant
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin',
                                'restore-admin'])
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('ticket-appointments/create') }}">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Create Appointmant
                                        </p>
                                    </a>
                                </li>
                            @endcanany

                            @canany(['show-patient-list', 'add-new-patient', 'update-patient-info', 'delete-patient-info'])
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('ticket-appointments') }}">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>
                                            Appointmant
                                        </p>
                                    </a>
                                </li>
                            @endcanany

                            @canany(['show-patient-list', 'add-new-patient', 'update-patient-info', 'delete-patient-info'])
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('appointments-calendar') }}">
                                        <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                        <p>

                                            Calender
                                        </p>
                                    </a>
                                </li>
                            @endcanany
                        </ul>
                    </li>
                @endcanany

                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-header ">Settings</li>
                @endcanany


                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-share   "></i>
                            <p>
                                Settings
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('users') }}">
                                    <i class="fas fa-fw fa-user  "></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('roles') }}">
                                    <i class="fas fa-fw fa-tags  "></i>
                                    <p>
                                        Roles
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('questions') }}">
                                    <i class="fas fa-fw fa-question "></i>
                                    <p>

                                        Questions
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcanany
                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-business-time "></i>
                            <p>
                                Schedule
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('work-schedules') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Work Schedule
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('leaves') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Leaves
                                    </p>
                                </a>
                            </li>


                        </ul>
                    </li>
                @endcanany
                @canany(['show-admin-list', 'create-new-admin', 'update-admin', 'delete-admin', 'restore-admin'])
                    <li class="nav-item has-treeview ">
                        <a class="nav-link">
                            <i class="fas fa-fw fa-business-time   "></i>
                            <p>
                                Email Template
                                <i class="fas fa-angle-left right "></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('email-templates/create') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Email Create
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('email-templates') }}">
                                    <i class="fas fa-fw fa-long-arrow-alt-right "></i>
                                    <p>
                                        Email List
                                    </p>
                                </a>
                            </li>


                        </ul>
                    </li>
                @endcanany






            </ul>
        </nav>
    </div>

</aside>
