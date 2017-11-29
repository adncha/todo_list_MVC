<section class="padding-top-20">
    <div class="container">
        <?
            if($this->input->get('suc_mess'))
            {
                ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-success">
                            <strong>Success!</strong> Task has been created
                        </div>
                    </div>
                </div>
                <?
            }
        ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <a href="/index.php/create_task" class="btn  btn-success btn-block">
                    <i class="glyphicon glyphicon-plus"></i>
                    CREATE A NEW TASK
                </a>
                <hr>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Eta</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <?
                                if($tasks)
                                {
                                    foreach ($tasks as $task)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $task->task ?></td>
                                            <td>
                                                <?= date('Y-m-d  H:i', strtotime($task->date)) ?>
                                            </td>
                                            <td>
                                                <form
                                                        id="task_update_form"
                                                        method="post"
                                                        action="/index.php/ajax/task_update"
                                                >
                                                    <input name="id" type='hidden' value="<?= $task->id ?>">
                                                    <input type="checkbox" value='1' name="eta" <?= !$task->eta ?: 'checked' ?>
                                                           data-on="Done" data-off="Not done" data-onstyle="success"
                                                           data-offstyle="danger" data-toggle="toggle" class="auto-submit">
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                        id="task_delete_form"
                                                        method="post"
                                                        data-reload="true"
                                                        data-confirm="Are you sure you wan to delete this task?"
                                                        action="/index.php/ajax/task_delete">
                                                    <input name="id" type='hidden' value="<?= $task->id ?>">
                                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                        <button type="button" class="btn btn-danger btn-xs auto-submit" data-title="Delete"><span
                                                                    class="glyphicon glyphicon-trash"></span></button>
                                                    </p>
                                                </form>

                                            </td>
                                        </tr>
                                        <?
                                    }
                                }
                                else
                                {
                                    echo 'You have no task, create a new one';
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>