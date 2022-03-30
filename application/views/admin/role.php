<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?php if ($this->session->flashdata('message') != null) : ?>
                <?= $this->session->flashdata('message'); ?>
            <?php endif; ?>
            <!-- <?= $this->session->flashdata('message'); ?> -->

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($role as $r) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $r['role'] ?></td>
                            <td class="text-center">
                                <a class="badge badge-info" href="<?= base_url('admin/roleaccess/' . $r['id']); ?>">access</a>
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#updaterole">edit</a>
                                <a class="badge badge-danger" href="<?= base_url('role/delete/' . $r['id']); ?>" nclick="return confirm('Are you want to delete this data?')">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Add role Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('role') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="role" placeholder="role name">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Update role -->
<div class="modal fade" id="updateRole" tabindex="-1" role="dialog" aria-labelledby="updateRoleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('role/role_update') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <?php foreach ($role as $r) : ?>
                            <input type="text" class="form-control" name="role" placeholder="role name" value="<?= $r['role'] ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>