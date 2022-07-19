<div class="containter">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">List Of Peoples</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($peoples as $p) : ?>
                    <tr>
                        <td><?= ++$start ?></td>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['email']; ?></td>
                        <td>
                            <a href="" class="badge badge-warning">detail</a>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>