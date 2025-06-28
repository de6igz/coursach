<?php include 'includes/header.php'; ?>
<h1>Contact Us</h1>
<p class="mb-4">We'd love to hear from you! Send us a message or drop by the studio.</p>
<div class="row">
  <div class="col-md-6 mb-4">
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" placeholder="Jane Doe">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
  <div class="col-md-6">
    <h5>Studio Address</h5>
    <p>123 Peace St.<br>Cityville, 12345</p>
    <p>Email: info@yogastudio.com<br>Phone: +1 555 123 4567</p>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
