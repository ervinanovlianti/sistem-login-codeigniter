<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if ($this->session->flashdata('message') != null) : ?>
                <?= $this->session->flashdata('message'); ?>
            <?php endif; ?>
            <!-- <?= $this->session->flashdata('message'); ?> -->

            <h5>Role : <?= $role['role'];  ?></h5>


            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($menu as $m) : ?>
                        <tr class="text-center">
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $m['menu'] ?></td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">

                                </div>
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