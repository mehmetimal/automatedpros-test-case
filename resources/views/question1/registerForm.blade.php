<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form id="registrationForm">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" required="required" id="email" name="name" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Enter your e-Mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" required="required" name="password" placeholder="Enter your password">
                        </div>
                        <button type="button" onclick="handleSubmitForm()" class="btn btn-success">Register</button>
                    </form>

                    
                    <div id="errorMessages" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>