<div class="card">
    <div class="card-header">
        Share something!
    </div>
    <div class="card-body">
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name="body" id="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                <a href="<?= ROOT_PATH.'/shares'?>">Cancel</a>
            </div>
        </form>
    </div>
</div>