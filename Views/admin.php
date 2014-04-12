<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">ประวัติเติมเงินล่าสุด</h3>
    </div>
    <div class="panel-body">
        <?php
        $admin = $this->db->get("tb_topup");
        if($admin->num_rows() > 0)
        {
            echo anchor("hbn_topup/clear","ลบประวัติการเติมเงิน");
            foreach($admin->result() as $row_admin)
            {
                echo "<p>คุณ $row_admin->topup_name เติมเงิน $row_admin->topup_point เวลา $row_admin->topup_date</p>";
            }
        }
        else
        {
            echo "<p>ยังไม่มีคนเติมเงินในเซิฟคุณ</p>";
        }
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">แก้ไข Uid tmtopup ของคุณ</h3>
    </div>
    <div class="panel-body">
        <?php
        $uid = $this->db->get_where("tb_topup_setting");
        $row_uid = $uid->row();
        ?>
        <p>Uid ได้จากตัวเลขด้านหลังของลิงค์เติมเงิน เช่น http://www.tmtopup.com/topup/?uid=99999 uid คือ 99999</p>
        <p>Uid เดิม <?=$row_uid->topup_uid?></p>
        <hr>
        <?php
        echo form_open("hbn_topup/edit");
        echo form_input(array(
            "name" => "v8",
            "class" => "form-control",
            "placeholder" => "UID tmtopup ของคุณ UID เดิม $row_uid->topup_uid",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_submit(array(
            "name" => "v9",
            "class" => "btn btn-lg btn-block btn-success",
            "value" => "แก้ไข UID"
        ));
        echo form_close();
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">แก้ไขอัตราการเติมเงิน</h3>
    </div>
    <div class="panel-body">
        <p>อัตราการเติมเงินเดิม</p>
        <?php
        $point = $this->db->get_where("tb_point");
        if($point->num_rows() > 0)
        {
            foreach($point->result() as $row_point)
            {
                echo "<p class='text-center'>{$row_point->point_price} ได้ {$row_point->point_point}</p>";
            }
        }
        ?>
        <hr>
        <?php
        echo form_open("hbn_topup/edit");
        echo form_input(array(
            "name" => "v1",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 50 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_input(array(
            "name" => "v2",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 90 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_input(array(
            "name" => "v3",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 150 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_input(array(
            "name" => "v4",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 300 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_input(array(
            "name" => "v5",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 500 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_input(array(
            "name" => "v6",
            "class" => "form-control",
            "placeholder" => "point ที่จะได้จากการเติม 1000 บาท",
            "required" => ""
        ));
        echo "<p></p>";
        echo form_submit(array(
            "name" => "v7",
            "class" => "btn btn-lg btn-block btn-success",
            "value" => "เปลี่ยนแปลง"
        ));
        echo form_close();
        ?>
    </div>
</div>