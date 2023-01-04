<?= $this->extend('app')?>
<?=$this->section('css')?>
<link rel="stylesheet" href="<?php echo base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
<?=$this->endsection()?>
<?= $this->section('body')?>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>Nama</th>
    <th>NIP</th>
    <th>Alamat</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($karyawans as $karyawan) :?>
            <tr>
            <td><?= $karyawan['nama']?></td>
            <td><?= $karyawan['nip']?></td>
            <td><?= $karyawan['alamat']?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>
<?= $pager->links() ?>

<?= $this->section('script')?>
<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('plugins/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<?=$this->endsection()?>

<?= $this->endsection()?>