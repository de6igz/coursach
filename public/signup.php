<?php include 'includes/header.php'; ?>
<h1>Sign Up for a Class</h1>
<?php if (!empty($_GET['success'])): ?>
<div class="alert alert-success">Thank you for signing up!</div>
<?php endif; ?>
<form method="post" action="/submit_signup.php">
  <div class="mb-3">
    <label for="full_name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="full_name" name="full_name" required>
  </div>
  <div class="mb-3">
    <label for="class_date" class="form-label">Class Date</label>
    <input type="date" class="form-control" id="class_date" name="class_date" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include 'includes/footer.php'; ?>
