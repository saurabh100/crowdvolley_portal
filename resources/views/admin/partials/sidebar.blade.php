<div class="sidebar" id="sidebar">
    <div class="sidebar_section">
        <div class="logo">
            <img src="https://crowdvolley.com/wp-content/uploads/2022/08/crod-logo.png" alt="logo" width="100" class="rounded-circle" />
        </div>
        {{-- Dashboard --}}
        <ul class="list-unstyled mb-5">
            <li class="sidebar-list-item">
                <a class="sidebar-link text-muted {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="sidebar-link-title fs-5">Dashboards</span>
                </a>
            </li>
            @employee
                <li class="sidebar-list-item  "><a class="sidebar-link text-muted" href="{{ route('profile') }}"><i class="fa-regular fa-user me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Profile</span></a>
                </li>
                <li class="list-unstyled"><a class="sidebar-link text-muted {{ Request::segment(1) == 'Attendance' ? 'active' : '' }}" href="{{ route('attendance.myAttendance') }}">
                    <i class="fa-regular fa-clock me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">My Attendance</span></a>
                </li>
                <li class="list-unstyled"><a class="sidebar-link text-muted {{ Request::segment(1) == 'leave' ? 'active' : '' }}" href="{{ route('leave.myLeave') }}">
                    <i class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">My Leave</span></a>
                </li>
            @endemployee
            @admin
            <li class="list-unstyled">
                <a class="sidebar-link text-muted {{ Request::segment(1) == 'employees' ? 'active' : '' }}" href="{{ route('employees.index') }}">
                    <i class="fa-solid fa-user-group me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Employees</span>
                </a>
            </li>
            <li class="list-unstyled">
                <a class="sidebar-link text-muted {{ Request::segment(1) == 'Attendance' ? 'active' : '' }}" href="{{ route('attendance.index') }}">
                    <i class="fa-regular fa-clock me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Attendance Records</span>
                </a>
            </li>
            {{-- Manage Leave --}}
            @php
                $isLeaveActive = Request::is('leave') || Request::is('LeaveType');
            @endphp
            <li class="sidebar-list-item">
                <a class="sidebar-link text-muted {{ $isLeaveActive ? '' : 'collapsed' }}" href="#" data-bs-target="#componentsDropdown" role="button" aria-expanded="{{ $isLeaveActive ? 'true' : 'false' }}" data-bs-toggle="collapse">
                    <i class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i> <span class="sidebar-link-title fs-5">Leave</span>
                </a>
                <ul class="sidebar-menu list-unstyled collapse {{ $isLeaveActive ? 'show' : '' }}" id="componentsDropdown">
                    <li class="sidebar-list-item fs-6">
                        <a class="sidebar-link text-muted {{ Request::is('leave') ? 'active' : '' }}" href="{{ route('leave.index') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Request</a>
                    </li>
                    <li class="sidebar-list-item fs-6">
                        <a class="sidebar-link text-muted  {{ Request::is('LeaveType') ? 'active' : '' }}" href="{{ route('leave.leaveType') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Type</a>
                    </li>
                </ul>
            </li>

            <li class="list-unstyled">
                <a class="sidebar-link text-muted {{ Request::segment(1) == 'payroll' ? 'active' : '' }}" href="{{ route('payroll.index') }}">
                    <i class="fa-solid fa-file-invoice-dollar me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Payroll</span>
                </a>
            </li>
            @php
                $isCatalogsActive = Request::is('Organization/*') || Request::is('viewSalary');
            @endphp
            <li class="sidebar-list-item">
                <a class="sidebar-link text-muted {{ $isCatalogsActive ? '' : 'collapsed' }}" href="#" data-bs-target="#widgetsDropdown" role="button" aria-expanded="{{ $isCatalogsActive ? 'true' : 'false' }}" data-bs-toggle="collapse">
                    <i class="fa-solid fa-building me-2 text-info"></i> <span class="sidebar-link-title fs-5">Catalogs</span>
                </a>
                <ul class="sidebar-menu list-unstyled collapse {{ $isCatalogsActive ? 'show' : '' }}" id="widgetsDropdown">
                    <li class="sidebar-list-item py-2 fs-6">
                        <a class="sidebar-link text-muted {{ Request::is('Organization/department') ? 'active' : '' }} ms-3" href="{{ route('organization.department') }}">
                            <i class="fa-regular fa-circle-right fa-sm me-1 text-info" aria-hidden="true"></i>Department
                        </a>
                    </li>
                    <li class="sidebar-list-item fs-6">
                        <a class="sidebar-link text-muted {{ Request::is('Organization/designationList') ? 'active' : '' }} ms-3" href="{{ route('organization.designationList') }}">
                            <i class="fa-regular fa-circle-right fa-sm me-1 text-info" aria-hidden="true"></i>Designation
                        </a>
                    </li>
                    <li class="sidebar-list-item fs-6">
                        <a class="sidebar-link text-muted {{ Request::is('viewSalary') ? 'active' : '' }} ms-3" href="{{ route('salary.view') }}">
                            <i class="fa-solid fa-dollar-sign fa-sm me-1 text-info" aria-hidden="true"></i>PayGrade
                        </a>
                    </li>
                </ul>
            </li>

            <li class="list-unstyled">
                <a class="sidebar-link text-muted {{ Request::segment(1) == 'users' ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <i class="fa-solid fa-circle-user me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Users</span>
                </a>
            </li>
            @endadmin
            {{-- Task Management --}}
            <li class="sidebar-list-item">
                <ul class="sidebar-menu list-unstyled collapse" id="e-commerceDropdown">
                    {{-- Notice --}}
                    <li class="sidebar-list-item">
                        <a class="sidebar-link text-muted" href="{{ route('show.notice') }}"><i class="fa-solid fa-check me-2 text-info"></i> <span class="sidebar-link-title fs-5">Notices</span></a>
                    </li>
                    {{-- Organization --}}
                </ul>

                @admin
                <hr />
                @endadmin

                <div class="mt-5">
                    <li class="list-unstyled">
                        <a class="sidebar-link text-muted" href="{{ route('service.form') }}"><i class="fa-brands fa-servicestack me-2 text-info"></i> <span class="sidebar-link-title fs-5">Services</span></a>
                    </li>
                    <li class="list-unstyled">
                        <a class="sidebar-link text-muted" href="{{ route('notice.create') }}"><i class="fa-brands fa-hubspot me-2 text-info"></i> <span class="sidebar-link-title fs-5">Notices Hub</span></a>
                    </li>
                    <li class="list-unstyled">
                        <a class="sidebar-link text-muted" href="{{ route('client.form') }}"><i class="fa-regular fa-handshake me-2 text-info"></i> <span class="sidebar-link-title fs-5">Clients</span></a>
                    </li>
                    <li class="list-unstyled">
                        <a class="sidebar-link text-muted" href="{{ route('message') }}"><i class="fa-solid fa-clipboard-question me-2 text-info"></i> <span class="sidebar-link-title fs-5">Query Corner</span></a>
                    </li>
                </div>
            </li>
    </ul>
</div>