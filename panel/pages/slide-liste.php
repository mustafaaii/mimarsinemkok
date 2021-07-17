
<?php include 'other/page-header.php'; ?>



<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-12">
            <!-- Basic table -->
            <div class="card">
                <div class="card-header" style="float: right">
                    <div class="row">
                        <div class="col-10">
                        </div>
                        <div class="col-2">
                            <h5 class="card-title"  style="float: right">
                                <a href="default.php?page=slide-ekle"  class="btn btn-success" style="border-radius:0px"><i class="icon-add pr-1"></i> Yeni Slider</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Slide ID</th>
                            <th>Slide Resmi</th>
                            <th>Slide Başlığı</th>
                            <th>Slide Alt Metni</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php


                        $query = $db->query("SELECT * FROM slide_table", PDO::FETCH_ASSOC);
                        if ( $query->rowCount())
                        {
                            foreach( $query as $row )
                            {
                                ?>
                                <tr>
                                    <td >
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <div style="width: 130px;height:170px">
                                            <img src="http://mimarsinemkok.com/panel/<?php echo $row['slide_image'];?>" width="130px" height="170px"/>
                                        </div>
                                    </td>
                                    <td><?php echo $row['slide_tittle'];?></td>
                                    <td><?php echo substr($row['slide_bottom_tittle'],0,40)."..."; ?></td>
                                    <td style="width: 400px">
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="default.php?page=slide-duzenle&slide_id=<?php echo $row['id'];?>"   class="btn btn-primary btn-sm btn-block"> <i class="icon-pencil pr-1" style="font-size:12px"></i> Düzenle</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="delete.php?delete=slide&delete_id=<?php echo $row['id'];?>"  class="btn btn-danger btn-sm btn-block" style="font-size:12px"><i class="icon-trash pr-1" ></i> Sil</a>
                                                <input value="" name="$delete_slide_id" type="text" hidden>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /basic table -->
        </div>
    </div>
</div>
<!-- /content area -->




