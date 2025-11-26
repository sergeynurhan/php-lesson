<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 420px;">

            <h3 class="text-center mb-4">Create Account</h3>

            <form action="register.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input 
                        type="text" 
                        name="first_name" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input 
                        type="text" 
                        name="last_name" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input 
                        type="text"
                        name="phone" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input 
                        type="date"
                        name="dob" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input 
                        type="text"
                        name="address" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <div class="form-label">Image</div>
                    <input
                        type="file"
                        name="image"
                        class="form-control"
                    >
                </div>


                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control" 
                        
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        class="form-control" 
                        
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Register
                </button>

            </form>
        </div>
    </div>
</body>
</html>