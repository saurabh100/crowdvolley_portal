<div class="sidebar" id="sidebar">
    <div class="sidebar_section">
        <div class="logo">
            <img src="https://crowdvolley.com/wp-content/uploads/2022/08/crod-logo.png" alt="logo" width="100" class="rounded-circle" />
        </div>
        {{-- Dashboard --}}
        <ul class="list-unstyled mb-5">
            <li class="sidebar-list-item "><a class="sidebar-link text-muted  {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="sidebar-link-title fs-5">Dashboards</span></a>
            </li>


            @employee
            {{-- User Profile --}}
            <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted" href="{{ route('profile') }}"><i
                        class="fa-regular fa-user me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Profile</span></a>
            </li>
            @endemployee


            @admin
                {{-- Employees --}}
                <li class="list-unstyled mt-1">
                    <a class="sidebar-link text-muted {{ Request::segment(1) == 'employees' ? 'active' : '' }}" href="{{ route('employees.index') }}">
                        <i class="fa-solid fa-user-group me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Employees</span>
                    </a>
                </li>
                {{-- Organization --}}
                @php
                    $isCatalogsActive = Request::is('Organization/*') || Request::is('viewSalary');
                @endphp
                <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted  {{ $isCatalogsActive ? '' : 'collapsed' }} " href="#"
                        data-bs-target="#widgetsDropdown" role="button" aria-expanded="{{ $isCatalogsActive ? 'true' : 'false' }}" data-bs-toggle="collapse"><i
                            class="fa-solid fa-building me-2  text-info"></i>
                        <span class="sidebar-link-title fs-5">Organization</span></a>
                    <ul class="sidebar-menu   list-unstyled collapse mt-1 {{ $isCatalogsActive ? 'show' : '' }} " id="widgetsDropdown">
                        <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('Organization/department') ? 'active' : '' }} "
                                href="{{ route('organization.department') }}"><i
                                    class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Department</a>
                        </li>
                        <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('Organization/designationList') ? 'active' : '' }} "
                                href="{{ route('organization.designationList') }}"><i
                                    class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Designation</a>
                        </li>
                        <li class="sidebar-list-item fs-6 mt-1">
                            <a class="sidebar-link text-muted {{ Request::is('viewSalary') ? 'active' : '' }} ms-3" href="{{ route('salary.view') }}">
                                <i class="fa-solid fa-dollar-sign fa-sm me-1 text-info" aria-hidden="true"></i>PayGrade
                            </a>
                        </li>
                    </ul>
                </li>
            @endadmin

            {{-- Attendance --}}
            <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="" data-bs-target="#tablesDropdown"
                    role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                        class="fa-regular fa-clock me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Attendance</span></a>
                <ul class="sidebar-menu   list-unstyled collapse " id="tablesDropdown">
                    @admin
                    <li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3"
                            href="{{ route('attendance.index') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Attendance
                            Record</a>
                    </li>
                    @endadmin
                    @employee
                    <li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3"
                            href="{{ route('attendance.giveAttendance') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Give Attendance</a>
                    </li>
                    <li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3"
                            href="{{ route('attendance.myAttendance') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Attendance</a>
                    </li>
                    @endemployee
                </ul>
            </li>


            {{-- Task --}}
            {{-- <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#"><i
                        class="fa-solid fa-list-check me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Manage Task</span></a>
            </li> --}}

            {{-- Manage Leave --}}
            @php
                $isLeaveActive = Request::is('leave') || Request::is('LeaveType');
                $isEmpLeaveActive = Request::is('Leave*');
            @endphp
            @admin
            <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted  {{ $isLeaveActive ? '' : 'collapsed' }}" href="#"
                    data-bs-target="#componentsDropdown" role="button" aria-expanded="{{ $isLeaveActive ? 'true' : 'false' }}" data-bs-toggle="collapse"><i
                        class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Leave</span></a>
                <ul class="sidebar-menu  list-unstyled collapse mt-1 {{ $isLeaveActive ? 'show' : '' }} " id="componentsDropdown">
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('leave') ? 'active' : '' }}"
                            href="{{ route('leave.index') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Request</a>
                    </li>
                    <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('LeaveType') ? 'active' : '' }}"
                            href="{{ route('leave.leaveType') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Leave Type</a>
                    </li>
                </ul>
            </li>
            @endadmin
            @employee
            <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted  {{ $isEmpLeaveActive ? '' : 'collapsed' }}" href="#"
                    data-bs-target="#componentsDropdown" role="button" aria-expanded="{{ $isEmpLeaveActive ? 'true' : 'false' }}" data-bs-toggle="collapse"><i
                        class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Leave</span></a>
                <ul class="sidebar-menu  list-unstyled collapse mt-1 {{ $isEmpLeaveActive ? 'show' : '' }} " id="componentsDropdown">
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('Leave/LeaveForm') ? 'active' : '' }}"
                            href="{{ route('leave.leaveForm') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Apply
                            Leave</a>
                    </li>
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('Leave/myLeave') ? 'active' : '' }}"
                            href="{{ route('leave.myLeave') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave</a>
                    </li>
                    <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3 {{ Request::is('Leave/myLeaveBalance') ? 'active' : '' }}"
                            href="{{ route('leave.myLeaveBalance') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave Balance</a>
                    </li>
                </ul>
            </li>
            @endemployee

            {{-- Task Management --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#pagesDropdown"
                    role="button" aria-expanded="false" data-bs-toggle="collapse">
                    <span class="sidebar-link-title fs-5"><i
                            class="fa-solid fa-list-check me-2 text-info"></i>Task</span></a>
                <ul class="sidebar-menu list-unstyled collapse" id="pagesDropdown">
                    @admin
                    <li class="sidebar-list-item  py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('createTask') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Assign Task</a>
                    </li>
                    <li class="sidebar-list-item  py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('taskList') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Task List</a>
                    </li>
                    @endadmin

                    @employee
                    <li class="sidebar-list-item  py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('myTask') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My
                            Task</a>
                    </li>
                    @endemployee
                </ul>
            </li>

            {{-- Payroll --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#"
                    data-bs-target="#e-commerceDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i
                        class="fa-solid fa-file-invoice-dollar me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Payroll</span></a>
                <ul class="sidebar-menu list-unstyled collapse " id="e-commerceDropdown">

                    @admin
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('payroll.create') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Create Payroll</a>
                    </li>
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('payroll.index') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Payroll List</a>
                    </li>
                    @endadmin
                    @employee
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3"
                            href="{{ route('myPayroll') }}"><i
                                class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Payroll</a>
                    </li>
                    @endemployee
                </ul>
            </li>

            @admin
            {{-- Salary Structure --}}
            {{-- <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted"
                    href="{{ route('salary.create.form') }}"><i class="fa-solid fa-dollar-sign me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">PayGrade</span></a>
            </li> --}}


            {{-- Users --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="{{ route('users.index') }}"><i
                        class="fa-solid fa-circle-user me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Users</span></a>
            </li>
            @endadmin

            {{-- Notice --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted" href="{{ route('show.notice') }}"><i
                        class="fa-solid fa-check me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Notices</span></a>
            </li>


        </ul>
        @admin
        <hr>
        @endadmin

        @admin
        <div class="mt-5">
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('service.form') }}"><i
                        class="fa-brands fa-servicestack  me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Services</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('notice.create') }}"><i
                        class="fa-brands fa-hubspot  me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Notices Hub</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('client.form') }}"><i
                        class="fa-regular fa-handshake me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Clients</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('message') }}"><i
                        class="fa-solid fa-clipboard-question me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Query Corner</span></a>
            </li>
        </div>
        @endadmin

    </div>
</div>