<?= $this->extend('app')?>
<?= $this->section('body')?>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>Kriteria</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($kriterias as $kriteria) :?>
            <tr>
            <td><?= $kriteria['kriteria']?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>
<?= $pager->links() ?>

<?= $this->endsection()?>