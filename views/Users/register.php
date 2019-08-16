<div class="card">
    <div class="card-header">
        Register User
    </div>
    <div class="card-body">
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Email</label>
                <input type="text" name="email" id="body" class="form-control">
            </div>
            <div class="form-group">
                <label for="link">Password</label>
                <input type="password" name="password" id="link" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>