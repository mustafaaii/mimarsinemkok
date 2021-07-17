<?php include 'other/page-header.php'; ?>
<?php

$cek = $db->query("select * from kurumsal where kurumsal_id ='1'",PDO::FETCH_ASSOC);
$cek->execute();
$data = $cek->fetch();

?>
<div class="content">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="data/insert.php?kurumsal=guncelle" method="post">
                <div class="row">
                    <div class="col-12">
                        <input name="baslik" id="" class="form-control" placeholder="Kurumsal Başlık" value="<?php echo $data['kurumsal_baslik'] ?>">
                    </div>
                    <div class="col-12 pt-4">
                        <textarea name="text" id="text"  rows="14" cols="14" class="ckeditor" runat="server"><?php echo $data['kurumsal_text'] ?></textarea>
                    </div>
                    <div class="col-12 pt-4">
                        <input name="key" id="key" class="form-control" placeholder="Anahtar Kelimeler" value="<?php echo $data['kurumsal_key'] ?>">
                    </div>
                    <div class="col-12 pt-4">
                        <button type="submit" class="btn btn-primary" style="float: left"> Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>