<div class="sidebar" id="sidebar">
    <div class="sidebar_section">
        <div class="logo">
            <img src="https://crowdvolley.com/wp-content/uploads/2022/08/crod-logo.png" alt="logo" width="100" class="rounded-circle">
        </div>
        {{-- Dashboard --}}
        <ul class="list-unstyled mb-5">
            <li class="sidebar-list-item"><a class="sidebar-link text-muted {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span class="sidebar-link-title fs-5">Dashboards</span></a>
            </li>


            @employee
            {{-- User Profile --}}
            <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted" href="{{ route('profile') }}"><i class="fa-regular fa-user me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Profile</span></a>
            </li>
            @endemployee


            @admin
            {{-- Organization --}}
            {{--<li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#widgetsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i class="fa-solid fa-building me-2  text-info"></i>
                    <span class="sidebar-link-title fs-5">Organization</span></a>
                <ul class="sidebar-menu   list-unstyled collapse " id="widgetsDropdown">
                    <li class="sidebar-list-item py-2  fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('organization.department') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Department</a>
                    </li>
                    <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('organization.designationList') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Designation</a>
                    </li>
                </ul>
            </li>--}}


            {{-- Salary Structure --}}
            {{--<li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted" href="{{ route('salary.create.form') }}"><i class="fa-solid fa-dollar-sign me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">PayGrade</span></a>
            </li>--}}

            {{-- Employees --}}
            {{--<li class="sidebar-list-item py-2 ">
                <a class="sidebar-link text-muted " href="#" data-bs-target="#cmsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                    <i class="fa-solid fa-user-group me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Employees</span></a>
                <ul class="sidebar-menu list-unstyled collapse " id="cmsDropdown">
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('manageEmployee.addEmployee') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Add
                            Employee</a></li>
                    <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('manageEmployee.ViewEmployee') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>View Employee</a></li>
                </ul>
            </li>--}}
            <li class="list-unstyled"><a class="sidebar-link text-muted {{ Request::segment(1) == 'employees' ? 'active' : '' }}" href="{{ route('employees.index') }}">
                <i class="fa-solid fa-user-group me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Employees</span></a>
            </li>
            @endadmin

            {{-- Attendance --}}
            @employee
                <li class="sidebar-list-item py-2 ">
                    <a class="sidebar-link text-muted " href="" data-bs-target="#tablesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                        <i class="fa-regular fa-clock me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Attendance</span></a>
                    <ul class="sidebar-menu   list-unstyled collapse " id="tablesDropdown">
                        @admin
                            {{--<li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3" href="{{ route('attendance.viewAttendance') }}">
                                <i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Attendance
                                    Record</a>
                            </li>--}}
                        @endadmin
                        
                        <li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3" href="{{ route('attendance.giveAttendance') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Give Attendance</a>
                        </li>
                        <li class="sidebar-list-item py-2 fs-6 "><a class="sidebar-link text-muted ms-3" href="{{ route('attendance.myAttendance') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Attendance</a>
                        </li>
                    </ul>
                </li>
            @endemployee

            <li class="list-unstyled"><a class="sidebar-link text-muted {{ Request::segment(1) == 'Attendance' ? 'active' : '' }}" href="{{ route('attendance.viewAttendance') }}">
                <i class="fa-regular fa-clock me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Attendance Records</span></a>
            </li>


            {{-- Task --}}
            {{-- <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted " href="#"><i
                    class="fa-solid fa-list-check me-2 text-info"></i>
                <span class="sidebar-link-title fs-5">Manage Task</span></a>
        </li> --}}

            {{-- Manage Leave --}}
                @admin
                <li class="list-unstyled">
                    <a class="sidebar-link text-muted {{ Request::segment(1) == 'allLeaveReport' ? 'active' : '' }}" href="{{ route('allLeaveReport') }}">
                    <i class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Leaves</span></a>
                </li>
                @endadmin
                @employee
                    <li class="sidebar-list-item py-2 ">
                        <a class="sidebar-link text-muted " href="#" data-bs-target="#componentsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                            <i class="fa-solid fa-person-walking-arrow-right me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Leave</span></a>
                        <ul class="sidebar-menu   list-unstyled collapse " id="componentsDropdown">
                            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('leave.leaveForm') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Apply
                                    Leave</a>
                            </li>
                            <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('leave.myLeave') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave</a>
                            </li>
                            <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('leave.myLeaveBalance') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Leave Balance</a>
                            </li>
                        </ul>
                    </li>
                @endemployee


            {{-- Task Management --}}
            @admin
                <li class="list-unstyled"><a class="sidebar-link text-muted {{ Request::segment(1) == 'TaskList' ? 'active' : '' }}" href="{{ route('taskList') }}">
                    <i class="fa-solid fa-list-check me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Tasks</span></a>
                </li>
            @endadmin
            @employee
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#pagesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                    <span class="sidebar-link-title fs-5"><i class="fa-solid fa-list-check me-2 text-info"></i>Task</span></a>
                <ul class="sidebar-menu list-unstyled collapse" id="pagesDropdown">
                    <li class="sidebar-list-item  py-2 fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('myTask') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My
                            Task</a>
                    </li>
                </ul>
            </li>
            @endemployee
            {{-- Payroll --}}
            @admin
                <li class="list-unstyled">
                    <a class="sidebar-link text-muted {{ Request::segment(1) == 'PayrollList' ? 'active' : '' }}" href="{{ route('view') }}">
                        <i class="fa-solid fa-file-invoice-dollar me-2 text-info"></i>
                        <span class="sidebar-link-title fs-5">Payroll</span></a>
                </li>
            @endadmin
            @employee
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="#" data-bs-target="#e-commerceDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <i class="fa-solid fa-file-invoice-dollar me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Payroll</span></a>
                <ul class="sidebar-menu list-unstyled collapse " id="e-commerceDropdown">
                    <li class="sidebar-list-item py-2 fs-6"><a class="sidebar-link text-muted ms-3" href="{{ route('myPayroll') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>My Payroll</a>
                    </li>
                </ul>
            </li>
            @endemployee
            
            @admin
            {{-- Salary Structure --}}
            {{-- <li class="sidebar-list-item py-2 "><a class="sidebar-link text-muted"
                href="{{ route('salary.create.form') }}"><i class="fa-solid fa-dollar-sign me-2 text-info"></i>
            <span class="sidebar-link-title fs-5">PayGrade</span></a>
            </li> --}}


            {{-- Users --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted " href="{{ route('users.list') }}"><i class="fa-solid fa-circle-user me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Users</span></a>
            </li>
            @endadmin

            {{-- Notice --}}
            <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted" href="{{ route('show.notice') }}"><i class="fa-solid fa-check me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Notices</span></a>
            </li>
            @admin
            {{-- Organization --}}
                <li class="sidebar-list-item py-2"><a class="sidebar-link text-muted {{ Request::segment(1) == 'Organization' ? 'active' : '' }}" href="#" data-bs-target="#widgetsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"><i class="fa-solid fa-building me-2  text-info"></i>
                    <span class="sidebar-link-title fs-5">Catalogs</span></a>
                    <ul class="sidebar-menu   list-unstyled collapse " id="widgetsDropdown">
                        <li class="sidebar-list-item py-2  fs-6">
                            <a class="sidebar-link text-muted {{ Request::segment(2) == 'department' ? 'active' : '' }} ms-3" href="{{ route('organization.department') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Department</a>
                        </li>
                        <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted {{ Request::segment(2) == 'designationList' ? 'active' : '' }}  ms-3" href="{{ route('organization.designationList') }}"><i class="fa-regular fa-circle-right fa-sm me-1 text-info"></i>Designation</a>
                        </li>
                        <li class="sidebar-list-item fs-6"><a class="sidebar-link text-muted  {{ Request::segment(1) == 'createSalary' ? 'active' : '' }}  ms-3" href="{{ route('salary.view') }}"><i class="fa-solid fa-dollar-sign fa-sm me-1 text-info"></i>PayGrade</a>
                        </li>
                    </ul>
                </li>
            @endadmin
        </ul>
        @admin
        <hr>
        @endadmin

        @admin
        <div class="mt-5">
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('service.form') }}"><i class="fa-brands fa-servicestack  me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Services</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('notice.create') }}"><i class="fa-brands fa-hubspot  me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Notices Hub</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('client.form') }}"><i class="fa-regular fa-handshake me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Clients</span></a>
            </li>
            <li class="list-unstyled"><a class="sidebar-link text-muted " href="{{ route('message') }}"><i class="fa-solid fa-clipboard-question me-2 text-info"></i>
                    <span class="sidebar-link-title fs-5">Query Corner</span></a>
            </li>
        </div>
        @endadmin
    </div>
</div>