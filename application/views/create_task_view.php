<section class="padding-top-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-offset-3">
                <form
                    action="/index.php/create_task/create"
                    method="post"
                >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task name</label>
                        <input type="text" class="form-control" name="task" placeholder="Enter task name">
                        <small id="emailHelp" class="form-text text-muted">Max 50 Char.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</section>