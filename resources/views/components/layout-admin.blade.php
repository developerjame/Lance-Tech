<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="min-vh-100 bg-dark text-white p-3 sidebar">
      <div class="text-center mb-4">
        <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Profile">
        <h5>Anthony</h5>
      </div>
      <button class="btn btn-primary w-100 mb-2">Add Servie</button>
      <button class="btn btn-outline-light w-100">Manage Services</button>
    </div>

    <!-- Page Content -->
    <div class="flex-grow-1">
      <!-- Top Header -->
      <div class="d-flex justify-content-between align-items-center px-4 py-3 border-bottom bg-light">
        <h4 class="mb-0">Dashboard</h4>
        <button class="btn btn-danger">Logout</button>
      </div>

      <!-- Cards Section -->
      <div class="container my-4">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Writing Accounts</h5>
                <p class="card-text fs-4 fw-bold">10</p>
                <div class="text-xl text-dark mb-4 hover:text-black"><a href="/admin/aimodel">Click here</i></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">AI Training Models Accounts</h5>
                <p class="card-text fs-4 fw-bold">15</p>
                <div class="text-xl text-dark mb-4 hover:text-black"><a href="/admin/aimodel">Click here</i></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Chat Moderations Accounts</h5>
                <p class="card-text fs-4 fw-bold">10</p>
                <div class="text-xl text-dark mb-4 hover:text-black"><a href="/admin/aimodel">Click here</i></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Training Sessions</h5>
                <p class="card-text fs-4 fw-bold">3</p>
                <div class="text-xl text-dark mb-4 hover:text-black"><a href="/admin/aimodel">Click here</i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
