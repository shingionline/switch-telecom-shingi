<h3>Question 3</h3>

<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true">students</a>
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false">teachers</a>
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      data-mdb-toggle="tab"
      href="#ex1-tabs-3"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false">subjects</a>
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-4"
      data-mdb-toggle="tab"
      href="#ex1-tabs-4"
      role="tab"
      aria-controls="ex1-tabs-4"
      aria-selected="false">student_subjects</a>
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-5"
      data-mdb-toggle="tab"
      href="#ex1-tabs-5"
      role="tab"
      aria-controls="ex1-tabs-5"
      aria-selected="false">teacher_subjects</a>
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
  <div
    class="tab-pane fade show active"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-label="students"
    aria-labelledby="ex1-tab-1">
    <?php include('content/tabs/students.php'); ?>
  </div>

  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
  <?php include('content/tabs/teachers.php'); ?>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
  <?php include('content/tabs/subjects.php'); ?>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
  <?php include('content/tabs/student_subjects.php'); ?>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-5">
  <?php include('content/tabs/teacher_subjects.php'); ?>
  </div>
</div>

<!-- Tabs content -->