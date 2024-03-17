<div class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('backend/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Rukada</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="{{ route('dashboard') }}">
        <div class="parent-icon"><i class='bx bx-home-circle'></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>

    @if (Auth::user()->role=='Admin')
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i>
        </div>
        <div class="menu-title">Manage User</div>
      </a>
      <ul>
        <li> <a href="{{ route('user.view') }}"><i class="bx bx-right-arrow-alt"></i>View User</a>
        </li>
        <li> <a href="{{ route('users.add') }}"><i class="bx bx-right-arrow-alt"></i>Add User</a>
        </li>
      </ul>
    </li>
    @endif
    
      
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="lni lni-bookmark-alt"></i>
        </div>
        <div class="menu-title">Manage Profile</div>
      </a>
      <ul>
        <li> <a href="{{ route('profile.view') }}"><i class="bx bx-right-arrow-alt"></i>Your Profile</a>
        </li>
        <li> <a href="{{ route('password.view') }}"><i class="bx bx-right-arrow-alt"></i>Change Password</a>
        </li>
      </ul>
    </li>
    

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bx bx-category"></i>
        </div>
        <div class="menu-title">Setup Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('student.class.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Class</a>
        </li>
        <li> <a href="{{ route('student.year.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Year</a>
        </li>
        <li> <a href="{{ route('student.group.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Group</a>
        </li>
        <li> <a href="{{ route('student.shift.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Shift</a>
        </li>
        <li> <a href="{{ route('fee.category.view') }}"><i class="bx bx-right-arrow-alt"></i>Fee Category</a>
        </li>
        <li> <a href="{{ route('fee.amount.view') }}"><i class="bx bx-right-arrow-alt"></i>Fee Category Amount</a>
        </li>
        <li> <a href="{{ route('exam.type.view') }}"><i class="bx bx-right-arrow-alt"></i>Exam Type</a>
        </li>
        <li> <a href="{{ route('school.subject.view') }}"><i class="bx bx-right-arrow-alt"></i>School Subject</a>
        </li>
        <li> <a href="{{ route('assign.subject.view') }}"><i class="bx bx-right-arrow-alt"></i>Assign Subject</a>
        </li>
        <li> <a href="{{ route('designation.view') }}"><i class="bx bx-right-arrow-alt"></i>Designation</a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Student Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('student.registration.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Registration</a>
        </li>
        <li> <a href="{{ route('roll.generate.view') }}"><i class="bx bx-right-arrow-alt"></i>Roll Generate</a>
        </li>
        <li> <a href="{{ route('registration.fee.view') }}"><i class="bx bx-right-arrow-alt"></i>Registration Fee</a>
        </li>
        <li> <a href="{{ route('monthly.fee.view') }}"><i class="bx bx-right-arrow-alt"></i>Monthly Fee</a>
        </li>
        <li> <a href="{{ route('exam.fee.view') }}"><i class="bx bx-right-arrow-alt"></i>Exam Fee</a>
        </li>
      </ul>
    </li>

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Employee Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('employee.registration.view') }}"><i class="bx bx-right-arrow-alt"></i>Employee Registration</a>
        </li>
        <li> <a href="{{ route('employee.salary.view') }}"><i class="bx bx-right-arrow-alt"></i>Employee Salary</a>
        </li>
        <li> <a href="{{ route('employee.leave.view') }}"><i class="bx bx-right-arrow-alt"></i>Employee Leave</a>
        </li>
        <li> <a href="{{ route('employee.attendance.view') }}"><i class="bx bx-right-arrow-alt"></i>Employee Attendance</a>
        </li>
        <li> <a href="{{ route('employee.monthly.salary') }}"><i class="bx bx-right-arrow-alt"></i>Employee Monthly Salary</a>
        </li>
      </ul>
    </li>

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Marks Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('marks.entry.add') }}"><i class="bx bx-right-arrow-alt"></i>Marks Entry</a>
        </li>
        <li> <a href="{{ route('marks.entry.edit') }}"><i class="bx bx-right-arrow-alt"></i>Marks Edit</a>
        </li>
        <li> <a href="{{ route('marks.entry.grade') }}"><i class="bx bx-right-arrow-alt"></i>Marks Grade</a>
        </li>
      </ul>
    </li>

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Accounts Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('student.fee.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Fee</a>
        </li>
        <li> <a href="{{ route('account.salary.view') }}"><i class="bx bx-right-arrow-alt"></i>Employee Salary</a>
        </li>
        <li> <a href="{{ route('other.cost.view') }}"><i class="bx bx-right-arrow-alt"></i>Other Cost</a>
        </li>
      </ul>
    </li>

    <li class="menu-label">Report Interface</li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class='bx bx-cart'></i>
        </div>
        <div class="menu-title">Report Management</div>
      </a>
      <ul>
        <li> <a href="{{ route('monthly.profit.view') }}"><i class="bx bx-right-arrow-alt"></i>Monthly-Yearly Profit</a>
        </li>
        <li> <a href="{{ route('markheet.generate.view') }}"><i class="bx bx-right-arrow-alt"></i>MarkSheet Generate</a>
        </li>
        <li> <a href="{{ route('attendance.report.view') }}"><i class="bx bx-right-arrow-alt"></i>Attendance Report</a>
        </li>
        <li> <a href="{{ route('student.result.view') }}"><i class="bx bx-right-arrow-alt"></i>Student Result</a>
        </li>
        <li> <a href="{{ route('student.idcard.view') }}"><i class="bx bx-right-arrow-alt"></i>Student ID Card</a>
        </li>
      </ul>
    </li>

  

  </ul>
  <!--end navigation-->
</div>