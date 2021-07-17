<?php include 'other/page-header.php'; ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<style>
    .iconify { width: 22px; height: 22px; color: #ef5350 }
</style>
<div class="content">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card bg-teal text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">3,450</h3>
                                        <span class="badge badge-dark badge-pill align-self-center ml-auto">+53,6%</span>
                                    </div>

                                    <div>
                                        ziyaretçi
                                        <div class="font-size-sm opacity-75">489 avg</div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">3,450</h3>
                                        <span class="badge badge-dark badge-pill align-self-center ml-auto">+53,6%</span>
                                    </div>

                                    <div>
                                        İzlenme
                                        <div class="font-size-sm opacity-75">489 avg</div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <div style="font-size: 16px">
                                <b>magecode güncelleme geçmişi.</b>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="font-size: 16px">
                            <b><?php
                                $query_update = $db->query("SELECT count(*) as TOTAL FROM update_table  WHERE update_status='none'", PDO::FETCH_ASSOC);
                                $query_update->rowCount();
                                foreach( $query_update as $row_update)
                                {
                                    if($row_update['TOTAL']== "none")
                                    {
                                        echo "";
                                    }
                                    else
                                    {
                                        echo "(".$row_update['TOTAL'].")"." "."Okunmamış Mesajınız Var";
                                    }
                                }
                                ?> </b>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row" style="height: 350px; overflow-y: scroll;">


                        <?php

                        $query_update = $db->query("SELECT * FROM update_table", PDO::FETCH_ASSOC);
                        if ( $query_update->rowCount())
                        {
                            foreach( $query_update as $row_update )
                            {
                                ?>
                                <div class="col-12">
                                    <div class="row <?php echo $row_update['update_status'];?>">
                                        <div class="col-1"><span class="iconify <?php echo $row_update['update_status'];?>" data-icon="bi:info-square" data-inline="false"></span></div>
                                        <div class="col-2"><b><?php echo $row_update['update_date'];?></b></div>
                                        <div class="col-1"><b><?php echo $row_update['update_time'];?></b></div>
                                        <div class="col-7"><div style="font-size: 22px"></div><?php  $update_text =$row_update['update_text']; echo substr($update_text, 0,60)."...";?></div>
                                        <div class="col-1"><a href="detail.php?update_id=<?php echo $row_update['id'];?>"><span class="iconify  <?php echo $row_update['update_status'];?>" data-icon="ant-design:eye-filled" data-inline="false"></span></a></div>
                                    </div>
                                </div>
                                <div class="col-12"><hr/></div>
                            <?php }  ?>
                        <?php }  ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
