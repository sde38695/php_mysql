<?php include "header.php"; ?>

<body>

<form>
  <div class="form-group">
    <label for="exampleInputId">Id</label>
    <input type="Username" class="form-control" id="InputUsername" aria-describedby="UsernameHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputTitle">Title</label>
    <input type="Title" class="form-control" id="exampleInputTitle1" placeholder="Title">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php include "footer.php"; ?>