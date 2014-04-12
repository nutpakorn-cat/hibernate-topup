<?php
$point = $this->db->get_where("tb_point");
$uid = $this->db->get_where("tb_topup_setting");
$row_uid = $uid->row();
?>
<script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=<?=$row_uid->topup_uid?>'></script>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">เติมเงิน</h3>
    </div>
    <div class="panel-body">
        <p class="text-center">อัตราการเติมเงิน</p>
        <?php
        if($point->num_rows() > 0)
        {
            foreach($point->result() as $row_point)
            {
                echo "<p class='text-center'>{$row_point->point_price} ได้ {$row_point->point_point}</p>";
            }
        }
        ?>
        <hr>
        <p>ชื่อที่คุณจะเติม : <?=$this->session->userdata("username")?></p>
        <input class="form-control" name="tmn_password" type="text" id="tmn_password" maxlength="14" placeholder="รหัสบัตรทรูมันนี่ 14 หลัก"/>
        <input name="ref1" type="hidden" value="<?=$this->session->userdata("username")?>" id="ref1" />
        <input name="ref2" type="hidden" value="<?=$this->session->userdata("username")?>" id="ref2" />
        <input name="ref3" type="hidden" value="<?=$this->session->userdata("username")?>" id="ref3" />
        <input class="btn btn-lg btn-block btn-success" type="button" value="เติมเงิน" onclick="submit_tmnc()" />
    </div>
</div>